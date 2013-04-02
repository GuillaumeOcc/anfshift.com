<?php
session_start();
 require("config.php");

 	$req =$bdd->prepare('SELECT * FROM users WHERE email= :email');
	$req->execute(array(
	 	'email' => $_POST['email']));
	 $result =$req->fetch();

	if($result){
		header('Location:index.php?error=1');
	}

	else{

		 if(isset($_POST['password']) AND $_POST['password'] == $_POST['confirmPassword'] AND !empty($_POST['password']) AND !empty($_POST['email']) AND !empty($_POST['firstname']) AND !empty($_POST['lastname']) AND !empty($_POST['job']))
		 {

		//Hachage du password
		 	$_POST['password'] = sha1($_POST['password']);
		 	//Insertion
		 	$req = $bdd->prepare('INSERT INTO users (firstname, lastname, email, password, job, date_create) VALUES (:firstname, :lastname, :email, :password, :job, NOW() )');

			$req->execute(array(
			':firstname' =>$_POST['firstname'],
			':lastname' =>$_POST['lastname'],
			':email' =>$_POST['email'],
			':password' =>$_POST['password'],
			':job' =>$_POST['job']
			));

		$_SESSION['firstname'] = $_POST['firstname'];
		$_SESSION['lastname'] = $_POST['lastname'];
		$_SESSION['job'] = $_POST['job'];
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['author'] = $_POST['firstname'].' '.$_POST['lastname'];

		header('Location:index.php');
		 }

			else
			{
				echo "Tous les champs sont obligatoires";
			}
	}

 ?>