<?php
include('config.php');

if( !empty($_POST['title']) && !empty($_POST['message']) && !empty($_POST['author']) && !empty($_POST['job']) ){
	$req = $bdd->prepare('INSERT INTO posts(title, message, author, job, date_create) VALUES(:title, :message, :author, :job, NOW())');
	$req->execute(array(
		':title'=> $_POST['title'],
		':message'=> $_POST['message'],
		':author' => $_POST['author'],
		':job' => $_POST['job']));


	header('Location:connect.php');
}
else{
	header('Location:index.php');
}