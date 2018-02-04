<?php
	require 'functions.php';
if (isset($_POST)) {
	$user = $_POST['user'];
	$material = $_POST['ressource'];
	$price = getPriceRessourcesRequest($material);
	$quantity = $_POST['quantity'];
	$total = $_POST['quantity'] * $price;

	$pdo = Singleton::getInstance();

	$stmt = $pdo->prepare("INSERT INTO request(idUser, idMaterial, quantity, priceRequest) VALUES (?, ?, ?, ?)");
	$stmt->bindParam(1, $user, PDO::PARAM_INT);
	$stmt->bindParam(2, $material,  PDO::PARAM_INT);
	$stmt->bindParam(3, $quantity, PDO::PARAM_INT);
	$stmt->bindParam(4, $total);
	// Insertion d'une ligne
	$stmt->execute();

	header('location:../home.php?transaction=validation');
}else {
	header('location:../home.php?erreur=validation');
}