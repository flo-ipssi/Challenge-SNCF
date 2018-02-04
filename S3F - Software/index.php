<?php 
if (isset($_SESSION)) {
	header('Location: home.php');
}
 ?>
<!DOCTYPE Html>
<Html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width"> 
	<title>S3F - Software</title>
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
		    			<li><a href="#">S'inscrire</a></li>
		    			<li><a href="#">Contact</a></li>
		    			<li><a href="#"><img src="img/logo.png" /></a></li>
		    		</ul>
		    	</div>
		  	</div>
		</nav>
	</header>
	<div class="container-fluid">
		<div id="contact" class="row sections contact">
			<h2>Connexion</h2>
			<div class="row col-lg-10 table">
				<img src="img/icone.png" alt="S3F" class="s3f">
				<form  method="post" action="php/connexion.php">
					<fieldset>
						<label for="nom">Identifiant</label>
						<input type="text" name="login">
						<label for="prenom">Mot de passe</label>
						<input type="password" name="pwd">
						<input type="submit" value="Connexion">
					</fieldset>
				</form>
			</div>
		</div>
	</div>

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  	<script src="js/script.js"></script>
</body>
</Html>