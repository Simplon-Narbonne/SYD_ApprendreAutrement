<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



// Formulaire et ses variables

<?php
    $lastname=$_POST['lastname'];
    $firstname=$_POST['firstname'];
    $email=$_POST['email'];
    echo 'Bonjour '. $lastname. ' '.$firstname.'<br/>Bienvenue sur votre espace peronnel !';
?>

// Insertion des données

<?php
try
{
	$bdd = new PDO('mysql:host=51.255.196.206;dbname=juliesschool;charset=utf8', 'edouard', 'KHum8ES');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// On ajoute une entrée dans la table coach
$bdd->exec('INSERT INTO coach (lastname,firstname,email) VALUES('.$lastname.' , '.$firstname.' , '.$email.')');
?>
</body>
</html>
