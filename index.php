//using PHP loop shorthand to create HTML for a menu restaurante
<?php
$drinks = [
  "Latte" => 3.99,
  "Coffee" => 2.00,
  "Tea" => 2.50,
  "Mocha" => 4,
  "coke" => 3
];
$pastries = [
  "Croissant",
  "Muffin",
  "Slice of Pie",
  "Slice of Cake",
  "Cupcake",
  "Brownie"
];

$sweets = [
  "Brigadeiro",
  "Pudin",
  "Chocolate Cake",
  "Cheesecake",
 
];
?>
<h1>Welcome to the Repetitive Cafe</h1>

//Drinks!
<h3>Drinks!</h3>
<ul>
  <?php foreach($drinks as $drink =>$price): ?>
    <li> <?="$drink :£$price"?>   </li>
   <?php endforeach; ?>
</ul>

//Pastries!
<h3>Pastries! (£2 each)</h3>
<ul>
<?php for($i = 0; $i < count($pastries); $i++): ?>
<li><?=$pastries[$i]?></li>
<?php endfor; ?>

</ul>

//sweets!
<h3>Sweets! (£3.90 each)</h3>
<ul>
<?php for($i = 0; $i < count($sweets); $i++): ?>
<li><?=$sweets[$i]?></li>
<?php endfor; ?>

</ul>

