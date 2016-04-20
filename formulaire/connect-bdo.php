<?php
try
{
  // on se connecte à MySQL
  $bdd = new PDO('mysql:host=51.255.196.206;dbname=juliesschool;charset=utf8', 'edouard', 'KHum8ES');
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
  // en cas d'erreur on arrête tout et on affiche un message
    die('Erreur : ' . $e->getMessage());
}
// si tout va bien on continue
?>
