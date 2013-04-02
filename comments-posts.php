<?php
include('config.php');
if(!empty($_POST['post-id']) && !empty($_POST['comments']) && !empty($_POST['author'])){
	$req= $bdd->prepare('INSERT INTO comments(posts_id, comments, author, date_create) VALUES (:post_id, :comments, :author, NOW())');
	$req->execute(array(
		':post_id' =>$_POST['post-id'],
		':comments' =>$_POST['comments'],
		':author' =>$_POST['author']
		));

header('Location:comments.php?id_post='.$_POST['post-id']);
}
else{
	header('Location:connect.php');
}
?>