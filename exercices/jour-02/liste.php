<?php

$groceries = ['chips', 'poulet', 'comté', 'jambon blanc', 'oeufs'];
var_dump($groceries);
echo "<br>$groceries[0]";

$index = count($groceries);
echo "<br>Nombre d'article = $index";
echo '<br> Le/les dernier(s) article(s) est/sont : '.$groceries[$index - 1];

echo '<br>';
array_push($groceries, 'pain', 'yaourt');
var_dump($groceries);

echo '<br>';
unset($groceries[1]);
var_dump($groceries);
