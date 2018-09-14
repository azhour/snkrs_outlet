<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', '4zgtxmlm59');
}

catch(Exception $e)

{
  die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM admin');
// var_dump($reponse);

$donnees = $reponse->fetch();
if($_POST['pseudo'] == $donnees && $_POST['pseudo'] == $donnees)
{
  echo "Bienvenue !";
}
else {
  echo "Accès refusé !";
}

// $reponse->closeCursor();
?>
