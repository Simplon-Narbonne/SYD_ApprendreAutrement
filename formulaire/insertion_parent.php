<?php
// Formulaire et ses variables
    $civilite=$_POST['civilite'];
    $lastname=$_POST['lastname'];
    $firstname=$_POST['firstname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $passwordConfirm=$_POST['password'];
    $codepostal=$_POST['codepostal'];
    $kidsNb=$_POST['kidsNb'];
//On crypte le password et sa confirmation
    $password_crypter = crypt($password, "SYDSYD");
    $passwordConfirm_crypter=crypt($passwordConfirm,"SYDSYD");
    echo 'Bonjour '.$civilite. ' '. $lastname. ' '.$firstname.' '.$password_crypter.' '.$passwordConfirm_crypter.' '.$codepostal.' '.$kidsNb.'<br/>Bienvenue sur votre espace peronnel !';
?>

<?php
// Insertion des données
try
{
$bdd = new PDO('mysql:host=51.255.196.206;dbname=juliesschool', 'edouard', 'KHum8ES');
//$bdd = new PDO('mysql:host=localhost;dbname=juliesschool;charset=utf8', 'root', 'ecodair');
$bdd->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
// On ajoute une entrée dans la table coach
$bdd->exec('INSERT INTO coach (civilite, lastname, firstname, email, password, passwordConfirm, codepostal, kidsNb) VALUES ("'.$civilite.'" , "'.$lastname.'" , "'.$firstname.'" , "'.$email.'" , "'.$password_crypter.'", "'.$passwordConfirm_crypter.'", "'.$codepostal.'", "'.$kidsNb.'")');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>
