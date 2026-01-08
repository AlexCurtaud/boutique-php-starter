<?php
$a = 0;
$b = "";
$c = null;
$d = false;
$e = "0";

var_dump($a == $b);
var_dump($a === $b);
var_dump($a == $c);
var_dump($a === $c);
var_dump($a == $d);
var_dump($a === $d);
var_dump($a == $e);
var_dump($a === $e);

// The comparison with == allow the value to do coersion meaning that one of the two value is translated as the other one.
// It means that for example 0 and false are equal in this case. Because 0 means false, so if you translate 0 to a boolean is will be false and false to a integer, it will be 0.

// The comparison with === is strict, there is no coersion of variable.
// It means that from the moment you compare two differents types of data, example boolan vs integer, it will be false