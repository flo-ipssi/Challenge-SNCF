<?php

require 'class/Singleton.php';

//Vérifie si l'utilisateur est aithentifié sinon ce dernier est renvoyé à la page de connexion
function isAuth(){
	if(!isset($_SESSION['user'])){
		header('location:index.php');
	}
}


//Récupère toutes les requêtes en cour
function getAllWaitRequest() {

	$pdo = Singleton::getInstance();

	$request = 'SELECT idRequest, nameCompanyUser, nameMaterial, quantity, priceRequest, nameStatus FROM request, statusRequest, user, material WHERE request.idMaterial = material.idMaterial AND statusRequest = idStatus AND user.idUser = request.idUser AND idStatus = 1';

	$req = $pdo->query($request);

	return $req;

}

//Affiche talbeau de toutes les requêtes en attente
function getTableWaitRequest() {
	$req = getAllWaitRequest();
	while($data = $req->fetch()){
		echo "<form method='post' action='php/updateRequest.php'><input type='hidden' name='idReq' value='".$data['idRequest']."'/><input type='hidden' name='qteMaterial' value='".$data['quantity']."'/><input type='hidden' name='nameMaterial' value='".$data['nameMaterial']."'/><tr><td class='cell100 column1'>".$data['nameCompanyUser']."</td><td class='cell100 column2'>".$data['nameMaterial']."</td><td class='cell100 column3'>".$data['quantity']."</td><td class='cell100 column5'>".$data['priceRequest']." €</td><td><button class='btn' type='submit' name='rep' value='Valider'><img src='img/check.png'></button><button class='cancel' type='submit' name='rep' value='Refuser'><img src='img/cross.png'></button></td></tr></form>";
	}
}

//Récupère toutes les requetes déjà validée
function getAllValidateRequest() {

	$pdo = Singleton::getInstance();

	$request = 'SELECT nameCompanyUser, nameMaterial, quantityMaterial, priceRequest, nameStatus FROM request, statusRequest, user, material WHERE request.idMaterial = material.idMaterial AND statusRequest = idStatus AND user.idUser = request.idUser AND idStatus != 1';

	$req = $pdo->query($request);

	return $req;

}

//Affiche talbeau de toutes les requêtes validées
function getTableValidateRequest() {
	$req = getAllValidateRequest();
	while($data = $req->fetch()){
		echo "<tr><td class='cell100 column1'>".$data['nameCompanyUser']."</td><td class='cell100 column2'>".$data['nameMaterial']."</td><td class='cell100 column3'>".$data['quantityMaterial']."</td><td class='cell100 column4'>".$data['priceRequest']." €</td><td class='cell100 column5'>".$data['nameStatus']."</td></tr>";
	}
}

//Récupère tout les matériaux ainsi que leurs quantités
function getAllMaterial() {

	$pdo = Singleton::getInstance();

	$request = 'SELECT * FROM material';

	$req = $pdo->query($request);

	return $req;


}

//Affiche le tableau des materiaux ainsi que leurs quantités
function getTableMaterial() {
	$reqM = getAllMaterial();
	while($material = $reqM->fetch()){
		echo "<tr><td class='cell100 column1'>".$material['nameMaterial']."</td><td class='cell100 column2'>".$material['quantityMaterial']."</td><td class='cell100 column3'>".$material['priceTonneMaterial']." €</td></tr>";
	}
}


//Récupère la categorie des utilisateurs et les affiche
function getProfil($user) {
	if ($user == "2") {
		echo '<li><a href="home.php">Accueil</a></li>
			<li><a href="profil.php">Profil</a></li>';
	}
}



//Récupère toutes les requêtes en cours
function getAllRessources() {

	$pdo = Singleton::getInstance();

	$request = 'SELECT idMaterial,nameMaterial,priceTonneMaterial FROM material';

	$req = $pdo->query($request);

	return $req;

}



//Affiche talbeau de toutes les requêtes en attente
function getSelectRessourcesRequest() {
	$req = getAllRessources();
	echo "<select name='ressource'>";
	while($data = $req->fetch()){
		echo '<option value="'.$data['idMaterial'].'">'.$data['nameMaterial'].', '.$data['priceTonneMaterial'].' €/Tonne</option>';
	}
	echo "</select>";
}


//Récupère et affiche toutes les commandes
function getAllOrder($user) {
	$pdo = Singleton::getInstance();

	$request = 'SELECT * FROM request, material, statusrequest WHERE request.idUser = '.$user.' AND request.idMaterial = material.idMaterial AND statusRequest.idStatus = material.idMaterial';
	$req = $pdo->query($request);
	while($data = $req->fetch()){
		$date = $data['dateRequest'];
		$date = explode(" ", $date);
		echo "<tr><td class='cell100 column1'>".$date[0]."</td><td class='cell100 column2'>".$data['priceRequest']." €</td><td class='cell100 column3'>".$data['nameMaterial']." </td><td class='cell100 column3'>".$data['quantity']."</td><td class='cell100 column3'>".$data['nameStatus']."</td></tr>";
	}
}




//Récupère et affiche toutes les commandese profil
function getAllProfil($user) {
	$pdo = Singleton::getInstance();
	$request = 'SELECT * FROM user WHERE user.idUser = '.$user.'';
	$req = $pdo->query($request);
	while($data = $req->fetch()){
		echo "<p>Login : ".$data['loginUser']."</p><p>Compagnie : ".$data['nameCompanyUser']."</p><p>Email : ".$data['emailUser']."</p><p>Telephone : ".$data['telUser']."</p>";
	}
}




//Récupère le prix d'un produit
function getPriceRessourcesRequest($material) {
	$pdo = Singleton::getInstance();

	$request = 'SELECT priceTonneMaterial FROM material WHERE material.idMaterial = '.$material.'';

	$req = $pdo->query($request);

	while($data = $req->fetch()){$price = $data['priceTonneMaterial'];}
	return $price;
}

