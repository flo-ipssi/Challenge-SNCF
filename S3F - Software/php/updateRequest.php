<?php
	require 'functions.php';

	$idReq = $_POST['idReq'];
	$qteMaterial = $_POST['qteMaterial'];
	$nameMaterial = $_POST['nameMaterial'];
	$rep = $_POST['rep'];

	$pdo = Singleton::getInstance();

	if($rep == 'Valider') {
		$statement = 'UPDATE request SET statusRequest=2 WHERE idRequest=:idReq';
		$request = $pdo->prepare($statement);
		$request->execute([':idReq' => $idReq]);

		$statementMat = 'UPDATE material SET quantityMaterial = (quantityMaterial - :qteMaterial) WHERE nameMaterial = :nameMaterial';
		$requestMat = $pdo->prepare($statementMat);
		$requestMat->execute(['qteMaterial' => $qteMaterial, ':nameMaterial' => $nameMaterial]);

	} else {
		$statement = 'UPDATE request SET statusRequest=6 WHERE idRequest=:idReq';
		$request = $pdo->prepare($statement);
		$request->execute([':idReq' => $idReq]);
	}

	header('location:../admin.php');