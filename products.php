<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Snkrs - Produit</title>
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
  <?php include('header.php');
  ?>
  <?php
   inlude('../snkrs/divers.php');

  try
  {
      $bdd = new PDO('mysql:host=localhost;dbname=snkrs_outlet;charset=utf8', 'root', $mdp);
  }
  catch (Exception $e)
  {
          die('Erreur : ' . $e->getMessage());
  }
  ?>

<?php   // array of products
$feature = [
  ['picture' => 'airmax.jpg',
  'name' => 'Nike Air Max 90/1',
  'price' => '149€',
  'size' => ['36', '37', '38', '39', '40', '41', '42', '43'],
  'colour' => ['red', 'black', 'white', 'gold']
],
['picture' => 'airmax.jpg',
'name' => 'Nike Air Max 90/1',
'price' => '149€',
'size' => ['36', '37', '38', '39', '40', '41', '42', '43'],
'colour' => ['red', 'black', 'white', 'gold']
],
['picture' => 'airmax.jpg',
  'name' => 'Nike Air Max 90/1',
  'price' => '149€',
  'size' => ['36', '37', '38', '39', '40', '41', '42', '43'],
  'colour' => ['red', 'black', 'white', 'gold']
],
['picture' => 'airmax.jpg',
  'name' => 'Nike Air Max 90/1',
  'price' => '149€',
  'size' => ['36', '37', '38', '39', '40', '41', '42', '43'],
  'colour' => ['red', 'black', 'white', 'gold']
]
];

$produit = $feature[$_GET['id']];

?>

<h1><?= $produit['name'] ?></h1>
<img src="img/<?= $produit['picture'] ?>" />
<p>Tailles</p>
<ul>
<?php foreach ($produit['size'] as $size) {
  echo "<li>$size</li>";
}?>
</ul>

<?php includes('footer.php');
?>
