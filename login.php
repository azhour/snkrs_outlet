
<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Connexion</title>
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
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->

  <?php include('header.php');

  ?>
  <div class="row m-auto">
  <form  class="border border-success mx-auto col-4 my-5 rounded " method="post" action="admin.php">
  <p class="text-center font-weight-bold">Connexion</p>
  <label class="ml-5" for="pseudo">Pseudo</label>
  <input id="pseudo" type="text" name="pseudo" value="" required><br/>

  <label class="ml-2" for="password">Mot de passe </label>
  <input id="password" type="password" name="password" required><br />

  <button type="submit" class="btn btn-success ml-5 my-3">Submit</button>
    </form>
    </div>

<?php include("footer.php"); ?>
