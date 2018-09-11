
<?php include('header.php');
?>



<?php
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
