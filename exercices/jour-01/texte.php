<?php

$brand = "Nike";
$model = "Air Max";
$format = "<br>%s %s";

echo $brand . ' ' . $model;
echo "<br>$brand $model";
echo sprintf($format, $brand, $model);

$price = 99.99;
echo "<br>Prix : $price €";  // Que s'affiche-t-il ?
echo '<br>Prix :' . $price . '€';  // Et là ?

//Ici le dexième echo ne fonctionne pas car les simple quote marchent uniquement avec la concaténation