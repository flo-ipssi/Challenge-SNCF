<?php


/****************** OPERATIONS *******************/
function update_ressource($quantity, $material){
	$stmt = $dbh->prepare("UPDATE material SET quantityMaterial = quantityMaterial-? WHERE idMaterial=?");
	$stmt->bindParam(1, $quantity, PDO::PARAM_INT);
	$stmt->bindParam(2, $material);
	// Modification de la ligne 
	$stmt->execute();
}

/************************************************************/
/************************************************************/
/************************************************************/

/****************** table "REQUEST" ****************************/
function requete($user,$material,$quantity,$price){
	include 'connection.php';
	$stmt = $dbh->prepare("INSERT INTO request(idUser, idMaterial, quantity, priceRequest) VALUES (?, ?, ?, ?)");
	$stmt->bindParam(1, $user, PDO::PARAM_INT);
	$stmt->bindParam(2, $material);
	$stmt->bindParam(3, $quantity, PDO::PARAM_INT);
	$stmt->bindParam(4, $price);
	// Insertion d'une ligne
	$stmt->execute();
}

function update_statut($statut, $requete){
	include 'connection.php';
	$stmt = $dbh->prepare("UPDATE request SET statusRequest=? WHERE idRequest=?");
	$stmt->bindParam(1, $statut, PDO::PARAM_INT);
	$stmt->bindParam(2, $requete);
	// Modification de la ligne
	if ($statut == "2") {
		$reponse = $bdd->query('SELECT * FROM request WHERE idRequest= '.$requete.'');
		while ($donnees = $reponse->fetch()){
			update_ressource($donnees['quantity'], $donnees['idMaterial ']);
		}
	}
	$stmt->execute();
}

/************************************************************/
/************************************************************/
/************************************************************/

/************************ table "MATERIALS ****************************/
function material($user,$material,$quantity,$price){
	include 'connection.php';
	$stmt = $dbh->prepare("INSERT INTO material(idUser, idMaterial, quantity, priceRequest) VALUES (?, ?, ?, ?)");
	$stmt->bindParam(1, $user, PDO::PARAM_INT);
	$stmt->bindParam(2, $material);
	$stmt->bindParam(3, $quantity, PDO::PARAM_INT);
	$stmt->bindParam(4, $price);
	// Insertion d'une ligne
	$stmt->execute();
}

function material_update($id, $quantity, $price){
	include 'connection.php';
	$stmt = $dbh->prepare("UPDATE material SET quantityMaterial =?, priceTonneMaterial=? WHERE idMaterial=?");
	$stmt->bindParam(1, $quantity, PDO::PARAM_INT);
	$stmt->bindParam(2, $price);
	$stmt->bindParam(3, $id, PDO::PARAM_INT);
	// Modification de la ligne 
	$stmt->execute();
}


function material_delete($id){
	include 'connection.php';
	$stmt = $pdo->prepare('DELETE message WHERE idMaterial = :id');
	$stmt->bindValue(':id', $id, PDO::PARAM_INT);
	$stmt->execute();
}