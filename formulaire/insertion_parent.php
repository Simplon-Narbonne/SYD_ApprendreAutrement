
<?php
// Formulaire et ses variables

    $lastname=$_POST['lastname'];
    $firstname=$_POST['firstname'];
    $email=$_POST['email'];
    echo 'Bonjour '. $lastname. ' '.$firstname.'<br/>Bienvenue sur votre espace peronnel !';
?>

<?php
// Insertion des données

try
{
$bdd = new PDO('mysql:host=51.255.196.206;dbname=juliesschool', 'edouard', 'KHum8ES');
//$bdd = new PDO('mysql:host=localhost;dbname=juliesschool;charset=utf8', 'root', 'ecodair');
$bdd->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
// On ajoute une entrée dans la table coach
$bdd->exec('INSERT INTO coach (lastname, firstname, email) VALUES ("'.$lastname.'" , "'.$firstname.'" , "'.$email.'")');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


?>
