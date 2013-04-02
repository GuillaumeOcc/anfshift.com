<?php
session_start();
	include('config.php');

	if(!empty($_POST['firstname']) AND !empty($_POST['lastname']) AND !empty($_POST['email'])){

	$req= $bdd->prepare('UPDATE users SET firstname = :firstname, lastname = :lastname, email = :email, job = :job WHERE id_user = :id');

 	$req->execute(array(
 		'firstname' => $_POST['firstname'],
 		'lastname' => $_POST['lastname'],
 		'email' => $_POST['email'],
 		'job' => $_POST['job'],
 		'id' => $_SESSION['id']));

 	$_SESSION['firstname'] = $_POST['firstname'];
 	$_SESSION['lastname'] = $_POST['lastname'];
 	$_SESSION['email'] = $_POST['email'];
 	$_SESSION['job'] = $_POST['job'];

 	
 	header('Location:profil.php');
	}

	else{

		echo 'Veuillez entrer un champ';
	}
	
 ?>