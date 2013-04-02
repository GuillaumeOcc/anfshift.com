<?php
session_start();

if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
   header('Location:connect.php');
}

   require('config.php'); 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link href="style.css" rel="stylesheet" type="text/css" />
      <link rel="icon" type="image/png" href="favicon.png" />
      <title>AnF Shift</title>
   </head>
   <body>
   <header>
      <div class="row-max">
         <div class="row">

            <div class="title">
               <h1>Abercrombie & Fitch </h1>
            </div>

            <div class="login">
               <form method="post" action="connexion.php">
                  <div>
                     <label for="Email">Email</label><input type="email" name="email"/>
                  </div>
                  <div>
                     <label for="password">Mot de Passe</label><input type="password" name="password"/>
                  </div>
                  <div>
                  <input type="submit" value="Connecter" />
                  </div>
               </form>
            </div>
         </div>
      </div>
   </header>

   <section>
      <div class="row">
         <div class="logo">
            <img src="logo.png" />
            <p>Ce site est réservé aux employés d'Abercrombie & Fitch de Paris afin d'échanger leurs shifts</p>
         </div>
         <div class="register">
         <?php include('form.php'); ?>
      </div>
      <div style="clear:both"></div>
   </section>


   <footer>
      <div class="row">
         <div class="guillaume">
            <p>Ce site a été réalisé par votre super Size Check Guillaume Occuly</p>
            <p>Pour toutes questions ou idées d'améliorations : occuly.guillaume@gmail.com</p>
         </div>
      </div>
   </footer>
</body>
</html>