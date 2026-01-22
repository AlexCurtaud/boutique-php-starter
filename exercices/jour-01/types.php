<?php

$a = '5';
$b = 3;
$c = $a + $b;

var_dump($a);
var_dump($b);
var_dump($c);

$price = '29.99€';
$result = $price + 10;
var_dump($result);

$additionStringInteger = 'Quand on additionne un string et un integer, le résultat obtenu est un string';
$additionStringFloat = "Quand on additionne un string et un integer, le résultat obtenu est un float. Cela pose problème si nous voulions que cela reste un string, cependant, je pense qu'il est mieux que les nombres seules soient des int ou float, et ce dès le départ.";
