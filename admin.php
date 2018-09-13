<?php if (isset($_POST['pseudo']) AND isset($_POST['password']) AND !empty($_POST['pseudo']) AND !empty($_POST['password']) ){
  echo '
   <form method="post" action="">
  <p>Ajouter un produit</p>
  <label for="NameProduct">Nom du produit</label>
  <input id="pseudo" type="text" name="pseudo" value="" required><br/>

  <label for="password">Mot de passe </label>
  <input id="password" type="password" name="password" required><br />

  <input type="submit" name="Envoyer" value="Envoyer">
  </form>';
} ?>
