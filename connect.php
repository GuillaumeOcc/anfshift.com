<?php
session_start();
if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
   header('Location:index.php');
}
include('config.php');

$name = $_SESSION['firstname'] .' '. $_SESSION['lastname'];
$job = $_SESSION['job'];

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
   	         <h1>Abercrombie & Fitch </h1>
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
		<div class="row">
			<div class="promo">
				<p>Dans le premier champ, indiquez le shift que vous voulez échanger au format Jour / Mois à Heures / Minutes.</p>
				<p>Dans le second champ, indiquez vos shifts souhaités.</p>
			</div>

			<form method="post" action="post_data.php">
				<div class="shift-form">
					<input type="hidden" name="job" value="<?php echo $job ?>" />
					<input type="hidden" name="author" value="<?php echo $name?>" /> 
					<label for="title">Shift</label><input type="text" name="title" placeholder="ex: 15/03 à 11h00"/>
					<label for="message">Message</label><input type="text" name="message" placeholder="Tapez votre message..."/>
				</div>
				<input class="submit-shift-form" type="submit" value="Envoyer" />
			</form>

			<div class="list">
				<h4>Liste des shifts pour <?php echo $_SESSION['job']; ?></h4>
				<?php
				$reponse= $bdd->query('SELECT id_post, title, message, author FROM posts WHERE job =\''.$job.'\' ORDER BY date_create DESC');
				while($view_posts= $reponse->fetch())
					{
				?>

						<div class="posts">
							<p class="shift-list"><span><?php echo $view_posts['author'] .'</span> veut échanger son shift du : <span>' . $view_posts['title'] .'</p><p class="shift-like">' . $view_posts['message'];
							?></span></p>
							<a href="comments.php?id_post=<?php echo $view_posts['id_post']; ?>">Répondre à l'annonce</a>
						</div>

						<?php
					}
				$reponse->closeCursor();
				?>
			</div>
		</div>
	</section>


	</footer>