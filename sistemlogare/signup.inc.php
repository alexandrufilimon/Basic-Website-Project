<?php

if (isset($_POST['submit'])) {
	
	include_once 'dbh.inc.php';
	
	$nume = mysqli_real_escape_string($conn, $_POST['nume']);
	$prenume = mysqli_real_escape_string($conn, $_POST['prenume']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$parola = mysqli_real_escape_string($conn, $_POST['parola']);
	
	// Verificam daca campurile au fost completate
	
if (empty($nume) || empty($prenume) || empty($email) || empty($username) || empty($parola)) {
	header('location: ../inregistrare.php?inregistrare=empty');
	exit();
} else {
		// Verificam caracterele introduse
	if(!preg_match("/^[a-zA-Z]*$/", $nume) || !preg_match("/^[a-zA-Z]*$/", $prenume)){
		header('location: ../inregistrare.php?inregistrare=invalid');
		exit();	
		} else {
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
						header('location: ../inregistrare.php?inregistrare=email');
						exit();
			} else {
				$sql = "SELECT * FROM utilizatori WHERE user_id='$username'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
				
				if($resultCheck > 0) {
					header('location: ../inregistrare.php?inregistrare=usertaken');
					exit();
				} else {
					// Hashing pass
					$hashedPass = password_hash($parola, PASSWORD_DEFAULT);
					// Adaugam utilizatorul in baza de date
					$sql = "INSERT INTO utilizatori (user_nume, user_prenume, user_email, user_username, user_parola) VALUES ('$nume', '$prenume', '$email', '$username', '$hashedPass');";
					mysqli_query($conn, $sql);
					header('location: ../inregistrare.php?inregistrare=success');
					exit();
				}
			}
		}
	}

} else {
	header('location: ../inregistrare.php');
	exit();
}