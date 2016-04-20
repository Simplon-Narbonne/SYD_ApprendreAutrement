<?php include ('connect-bdo.php'); //on se connecte à la bdd

// Formulaire et ses variables

$lastname=$_POST['lastname'];
$firstname=$_POST['firstname'];
$email=$_POST['email'];

//echo 'Bonjour '. $lastname. ' '.$firstname.'<br/>Bienvenue sur votre espace personnel !';


// On affiche ce qui a dans la table coach

$reqselect = $bdd->prepare("INSERT INTO coach VALUES lastname = :val_lastname AND firstname = :val_firstname AND email = :val_email");
$reqselect->execute(array('val_lastname' => $_POST['lastname'], 'val_firstname' => $_POST['firstname'], 'val_email' => $_POST['email']));

$reponse = $reqselect->fetch();
//var_dump($reqselect);

//pour insérer

?>
