<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Espace administrateur</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  </head>

<body>







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
    echo '<div class="messageAccueil">
    <p class="text-center font-weight-bold">Bienvenue</p>
    </div>';

} else {
  echo 'accès refusé';
}


$reponse->closeCursor();


?>
