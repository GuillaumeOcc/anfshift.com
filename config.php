<?php
try
{
	$bdd = new PDO('mysql:host=db450256108.db.1and1.com;dbname=db450256108', 'dbo450256108', 'JmfL4CazFXGXLXjX');
	 $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>