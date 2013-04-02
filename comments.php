<?php
session_start();

include('config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link href="style.css" rel="stylesheet" type="text/css" />
      <link rel="icon" type="image/png" href="favicon.png" />
      <title>AnF Shift</title>
	<header>

		<div class="row-max">
         <div class="row">

            <div class="title">
   	         <h1><a href="connect.php" style="text-decoration:none;color:whitesmoke;">Abercrombie & Fitch </a></h1>
            </div>

            <div class="hello">
               	<p><?php echo 'Hey Whats Going On ' . htmlspecialchars($_SESSION['firstname']. ' ?');?><p>
               	<a href="profil.php">Profil</a>
               	<a href="connect.php">Accueil</a>
				<a href="deconnexion.php">Se Déconnecter</a>
            </div>
         </div>
      </div>
	</header>

	<section>


<?php

	$var;
	$var = $_GET['id_post'];


	if(isset($var) && !empty($var)){

		$req =$bdd->prepare('SELECT * FROM posts WHERE id_post= :id');
	 	$req->execute(array(
	 		'id' => $_GET['id_post']));
	 	$result =$req->fetch();
// Error
?>
		<section>
			<div class="list">
				<div class="posts">
					<div class="row" style="margin-bottom:20px; height:auto;">
					<p class="shift-list"><span><?php echo $result['author'] .'</span> veut échanger son shift du : <span>' . $result['title'] .'</p><p class="shift-like">' . $result['message'];
									?></span></p>
					</div>
				</div>
			</div>
		</section>
		<div class="row" style="margin-bottom:20px; height:auto;">
<?php
	$reponse= $bdd->query("SELECT comments, author FROM comments WHERE posts_id = $_GET[id_post] ORDER BY date_create");
	while($view_comments= $reponse->fetch())
	{
		?>
				<div class="comments">
					<p><span><?php echo $view_comments['author'] .'</span> a envoyé : <br />' . $view_comments['comments'];?></p>
				</div>
			<?php
	}

	$reponse->closeCursor();
	?>
				<div class="commenter">
					<form method='post' action='comments-posts.php'>
						<input type="hidden" name="author" value="<?php echo $_SESSION['author'];?>" />
						<input type="hidden" name="job" value="<?php echo $_SESSION['job'];?>">
						<input type="hidden" name="post-id" value=<?php echo $_GET['id_post']?> />
						<label for="comments">Reponse</label><input placeholder="votre réponse" type="text" name="comments"/>
						<input type="submit" value="Repondre"/>
					</form>
				</div>
			</div>

	<?php
	}
	else{
		header('Location: connect.php');
	}
?>
	</section>