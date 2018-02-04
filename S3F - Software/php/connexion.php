<?php
	require 'class/Singleton.php';
	session_start();

	$login = $_POST['login'];
	$pwd = hash('tiger192,3', $_POST['pwd']);

	if(isset($login) && isset($pwd)){

		if(!empty($login) && !empty($pwd)){

			$pdo = Singleton::getInstance();
			$statement = 'SELECT idUser, loginUser, nameCompanyUser, telUser, emailUser, nameCategoryUser FROM user, categoryuser WHERE idCategoryUser = idCategory AND loginUser = :login AND pwdUser = :pwd';
			$request = $pdo->prepare($statement);
			$request->execute([':login' => $login, ':pwd' => $pwd]);
			$result = $request->fetch();

			if(empty($result)) {
				header('location:../index.php');
			}

			$_SESSION['user'] = $result;

			switch($_SESSION['user']['nameCategoryUser']){
				case 'admin':
					header('location:../admin.php');
					break;
				case 'client':
					header('location:../home.php');
					break;
			}

		}else {

			header('location:../index.php');
			
		}
	}

	