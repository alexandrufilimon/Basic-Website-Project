<!DOCTYPE HTML>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/responsive_menu.css">
	<link rel="stylesheet" type="text/css" href="css/backgroundvid.css">
	<link rel="stylesheet" type="text/css" href="css/background.css">
	<link rel="stylesheet" type="text/css" href="css/inregistrare.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<link rel="icon" href="favicon.ico">
	<meta charset="UTF-8">
	<title>Fabrika - Înregistrare</title>
</head>

<body>
	<div id='cssmenu'>
<ul>
   <li><a href='index.html'><span>Acasă</span></a></li>
   <li><a href='galerie.html'><span>Galerie</span></a></li>
   <li class='active has-sub'><a href=''><span>Meniu</span></a>
			<ul>
				<li><a href='oferte.html'><span>Oferte</span></a></li>
			</ul>
   <li><a href='contact.html'><span>Contact</span></a></li>
   <li><a href='inregistrare.php'><span>Înregistrare</span></a></li>
   <li class='last'>
			<form action="sistemlogare/login.inc.php" method="POST">
				<input type="text" name="username" placeholder="Username">
				<input type="password" name="parola" placeholder="Parola">
				<button type="submit" name="submit">Logare</button>
			</form>
			</li>
</ul>
	</div>
	
	
		<header class="v-header container">
		<div class="fullscreen-video-wrap">
			<video src="galerie/barbecue_2.mp4" autoplay muted loop></video>
		</div>
		<div class="header-overlay"></div>
		<div class="header-content">
				<div class="formular">
					<img width="80" src="galerie/person-generic.png">
					<form id="inregistrare" action="sistemlogare/signup.inc.php" method="POST">
						<input type="text" name="nume" id="button" placeholder="Nume"><br><br>
						<input type="text" name="prenume" id="button" placeholder="Prenume"><br><br>
						<input type="email" name="email" id="button" placeholder="E-mail"><br><br>
						<input type="text" name="username" id="button" placeholder="Username"><br><br>
						<input type="password" name="parola" id="button" placeholder="Parola"><br><br>
						<input type="submit" value="Înregistrare" name="submit" id="butt">
					</form>
				</div>
		</div>
	</header>
	
</body>
</html>
