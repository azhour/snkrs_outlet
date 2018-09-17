<?php
  include('../divers/divers2.php');
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=snkrs_outlet;charset=utf8', 'root', $mdp);
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


// to recuperate password
$reponse = $bdd->query('SELECT password FROM admin WHERE pseudo=\'admin\'');

$donnees = $reponse->fetch();

// var_dump(password_hash($_POST['password'], PASSWORD_DEFAULT));
// var_dump($donnees['password']);
if (password_verify($_POST['password'], $donnees['password'])) {
    echo 'Bienvenue';
} else {
  echo 'accès refusé';
}


$reponse->closeCursor();


?>
