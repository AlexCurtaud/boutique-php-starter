<?php
$clothes = ["T-shirt", "Jean", "Pull"];
$accessories = ["Ceinture", "Montre", "Lunettes"];
$catalogue = array_merge($clothes, $accessories);
$totalPdt = count($catalogue);


var_dump($catalogue);
echo '<br>' . $totalPdt;

array_unshift($catalogue, "Marcel");
echo '<br>';
var_dump($catalogue);
