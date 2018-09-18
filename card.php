<?php

$feature = [
[
  'src' => "img/converse.jpg",
  'marque' => 'Converse',
  'price' => '45€',
  'size' => ['36', '37', '38', '39', '40', '41', '42', '43'],
  'colour' => ['red', 'black', 'white', 'blue']
],
[
  'src' => "img/vans.jpg",
  'marque' => 'Vans',
  'price' => '60€',
  'size' => ['36', '37', '38', '39', '40', '41', '42', '43'],
  'colour' => ['lime', 'black', 'white', 'blue']
],
[
  'src' => 'img/nike.jpg',
  'marque' => 'Nike',
  'price' => '50€',
  'size' => ['36', '37', '38', '39', '40', '41', '42', '43'],
  'colour' => ['red', 'black', 'white', 'gold']
],
[
  'src' => "img/reebok.jpg",
  'marque' => 'Reebok',
  'price' => '50€',
  'size' => ['36', '37', '38', '39', '40', '41', '42', '43'],
  'colour' => ['red', 'black', 'white', 'gold']
]
];

?>

<div class="container mt-5 mb-5">
<div class="col-12 m-auto row">

<!-- Create multi card -->
<?php
foreach ($feature as $key => $value)
{ ?>
  <div class="col-10 col-sm-10 col-md-6 col-lg-2 m-auto p-0 card">
    <a href="products.php?&id=<?= $key ?>"><img class="card-img-top" src="<?= $value['src'] ?>" alt="Card image cap"/>
    <div class="col-sm-10 col-md-6 col-lg-3 card">
      <div class="d-flex d-row text-center card-body">
        <p class="pr-2 card-text"> <?= $value['marque'] ?></p>
        <p class="pl-2 card-text"> <?= $value['price'] ?></p>
      </div>
    </div></a>
  </div>
<?php } ?>
</div>
</div>
