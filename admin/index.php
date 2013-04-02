<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link href="style.css" rel="stylesheet" type="text/css" />
      <link rel="icon" type="image/png" href="favicon.png" />
      <title>AnF Shift</title>
   </head>

<?php echo crypt('blablabla0'); ?>
<br>
<?php 

	include('../config.php');

	//Regarde le nombre de personne inscrites
	$reponse = $bdd->query('SELECT COUNT(*) AS number_users FROM users');
	 $donnees = $reponse->fetch();
	 	echo "Nombre d'associés inscrits : " .  $donnees['number_users'] . '<br> <br>';


	 //regarde le nombre caissier
	  $reponse = $bdd->query("SELECT COUNT(*) AS number_cashier FROM users WHERE job='cashier'");
	 $donnees = $reponse->fetch();
	 	echo "Nombre de caissier inscrits : " .  $donnees['number_cashier'] . '<br>';

	 	//regarde le nombre d'impact1
	  $reponse = $bdd->query("SELECT COUNT(*) AS number_impact1 FROM users WHERE job='impact1'");
	 $donnees = $reponse->fetch();
	 	echo "Nombre d'impact 1 inscrits : " .  $donnees['number_impact1'] . '<br>';

	 	//regarde le nombre d'impact2
	  $reponse = $bdd->query("SELECT COUNT(*) AS number_impact2 FROM users WHERE job='impact2'");
	 $donnees = $reponse->fetch();
	 	echo "Nombre d'impact 2 inscrits : " .  $donnees['number_impact2'] . '<br>';

	 	//regarde le nombre modele
	  $reponse = $bdd->query("SELECT COUNT(*) AS number_impact2 FROM users WHERE job='model'");
	 $donnees = $reponse->fetch();
	 	echo "Nombre de modele inscrits : " .  $donnees['number_impact2'] . '<br>';

	 	//regarde le nombre stylist
	  $reponse = $bdd->query("SELECT COUNT(*) AS number_stylist FROM users WHERE job='stylist'");
	 $donnees = $reponse->fetch();
	 	echo "Nombre de stylist inscrits : " .  $donnees['number_stylist'] . '<br>';

	 	//regarde le nombre de ops
	  $reponse = $bdd->query("SELECT COUNT(*) AS number_ops FROM users WHERE job='ops'");
	 $donnees = $reponse->fetch();
	 	echo "Nombre d'OPS inscrits : " .  $donnees['number_ops'] . '<br>  <br> ';



	 	//regarde le nombre d'annonces 

	 	 $reponse = $bdd->query("SELECT COUNT(*) AS number_posts FROM posts");
	 	 $donnees = $reponse->fetch();
	 	echo "Nombre d'annonces totales : " .  $donnees['number_posts'] . '<br>';


	 	//regarde le nombre de réponses
	 	$reponse = $bdd->query("SELECT COUNT(*) AS number_comments FROM comments");
	 	 $donnees = $reponse->fetch();
	 	echo "Nombre de réponses : " .  $donnees['number_comments'] . '<br> <br>';


	 	echo "Liste des users par nom :" . '<br> <br>';

	//Liste des personnes par lastname
	$reponse = $bdd->query('SELECT * FROM users ORDER BY lastname');
	while($donnees = $reponse->fetch()){


		echo  $donnees['lastname'] . ' | ' . $donnees['firstname'] .' | ' . $donnees['job'] . ' | ' . $donnees['date_create'] . '<br>' ;
	}

	 


	 

?>