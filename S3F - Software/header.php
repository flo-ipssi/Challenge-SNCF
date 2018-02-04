<?php
	session_start();
	require 'php/functions.php';
	isAuth();
?>
<!DOCTYPE Html>
<Html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width"> 
	<title>S3F - Software</title>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">	
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Righteous" rel="stylesheet">  
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<nav class="navbar">
		  	<div class="container-fluid">
		    	<div class="navbar-header">
		    		<ul class="reseaux">
		    			<a href="https://www.facebook.com/" target="_blank"><li class="fb"></li></a>
		    			<a href="https://twitter.com/?lang=fr" target="_blank"><li class="twitter"></li></a>
		    			<a href="https://www.youtube.com/" target="_blank"><li class="yt"></li></a>
		    		</ul>
		    		<ul class="menu">
		    			<li>Bienvenue <?= $_SESSION['user']['loginUser']; ?>
						<form action="php/deconnexion.php" method="post">
							<input type="submit" value="Deconnexion"/>
						</form></li>
						<?php
						if (isset($_SESSION)) {
							getProfil($_SESSION['user']['idUser']);
						} ?>
		    			<li><a href="#">Contact</a></li>
		    			<li><a href="#"><img src="img/logo.png" /></a></li>
		    		</ul>
		    	</div>
		  	</div>
		</nav>
	</header>