<?php
session_start();
if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
   header('Location:index.php');
}
include('config.php');

$name = $_SESSION['firstname'] .' '. $_SESSION['lastname'];
$job = $_SESSION['job'];
$id = $_SESSION['id'];

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
	     <div class="profil">
            
               <p><?php echo "Tu t'appelles " .htmlspecialchars($_SESSION['firstname']) . ' ' .htmlspecialchars($_SESSION['lastname']). "et tu travailles en tant que  " . htmlspecialchars($_SESSION['job']); ?> </p>
               <?php include('form-profil.php'); ?>
            
         </div>
      </div>
	</section>