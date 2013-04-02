<?php

 require('config.php');

//Hachage du mot de passe
 $_POST['password'] = sha1($_POST['password']);

 //Insertion
 $req =$bdd->prepare('SELECT * FROM users WHERE email= :email AND password= :password');
 $req->execute(array(
 	'email' => $_POST['email'],
 	'password' => $_POST['password']));
 $result =$req->fetch();


if (!$result)
{
	echo 'Identifiant ou Mot de passe incorrect';
}

else {
	session_start();

	$_SESSION['id']= $result['id_user'];
	$_SESSION['firstname'] = $result['firstname'];
	$_SESSION['lastname'] = $result['lastname'];
	$_SESSION['job'] = $result['job'];
	$_SESSION['email'] = $result['email'];
	$_SESSION['author'] = $result['firstname'].' '.$result['lastname'];

	header('Location:connect.php');
	}
?>










