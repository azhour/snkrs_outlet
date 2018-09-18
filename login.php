<?php include('header.php');?>

  <form method="post" action="admin.php">
    <p>Se connecter</p>
    <label for="pseudo">Pseudo</label>
    <input id="pseudo" type="text" name="pseudo" value="" required><br/>

    <label for="password">Mot de passe </label>
    <input id="password" type="password" name="password" required><br />

    <input type="submit" name="Envoyer" value="Envoyer">
  </form>

<?php include("footer.php"); ?>
