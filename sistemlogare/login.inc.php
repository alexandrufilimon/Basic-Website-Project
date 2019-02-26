<?php

session_start();

if (isset($_POST['submit'])){
	
	include 'dbh.inc.php';
	
	$user = mysqli_real_escape_string($conn, $_POST['username']);
	$pass = mysqli_real_escape_string($conn, $_POST['parola']);
	
	if(empty($user) || empty($pass)){
		header('location: ../inregistrare.php?login=empty');
		exit();
	} else {
		$sql = "SELECT * FROM utilizatori WHERE user_username='$user'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header('location: ../inregistrare.php?login=error');
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				// De-hash parola
				$hashedPassCheck = password_verify($pass, $row['user_parola']);
				if ($hashedPassCheck == false) {
					header('location: ../inregistrare.php?login=error');
					exit();
				} elseif ($hashedPassCheck == true) {
					//Logare
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_nume'] = $row['user_nume'];
					$_SESSION['u_prenume'] = $row['user_prenume'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_username'] = $row['user_username'];
					header('location: ../index.html?login=success');
					exit();
				}
			}
		}
	}
} else {
	header('location: ../inregistrare.php?login=error');
	exit();
}