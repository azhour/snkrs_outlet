<?php

  // include('../divers/divers2.php');
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=snkrs_outlet;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$reponse = $bdd->query('SELECT password FROM admin WHERE pseudo=\'admin\'');

$donnees = $reponse->fetch();

// If you have entered the password, you have access to the admin area and you can add a product
if (password_verify($_POST['password'], $donnees['password'])) {
    echo 'Bienvenue' . '</ br>' . '<form method="post" action="form.php">
        <label for="name">Nom du produit</label>
        <input id="name" type="text" name="name" value="" required><br/>
        <label for="price">Prix </label>
        <input id="price" type="text" name="price" required><br />
        <label for="size">Pointures </label>
        <input id="size" type="text" name="size" required><br />
        <label for="color">Couleurs </label>
        <input id="color" type="text" name="color" required><br />

        <input type="submit" name="Envoyer" value="Envoyer">
      </form>';
} else {
  echo 'accès refusé';
}

$reponse->closeCursor();

?>
