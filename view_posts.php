<?php
include('config.php');

$reponse= $bdd->query('SELECT title, message, author FROM posts');
while($view_posts= $reponse->fetch())
{
	echo $view_posts['author'] .' a envoyé : ' . $view_posts['title'] .'<br />' . $view_posts['message'];
	?>
	<a href="view_posts.php?comment=<?php echo $view_posts['id']; ?>">Commentaires</a>
	<?php
}

$reponse->closeCursor();

?>