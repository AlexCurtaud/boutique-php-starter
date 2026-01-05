<?php

$priceExcludingTax = 100;
$vat = 0.2;
$quantitiy = 3;

$amoutVat = $priceExcludingTax * $vat;
$priceWithTax = $priceExcludingTax + $amoutVat;
$totalWithTax = $priceWithTax * $quantitiy;

echo "Montant de la TVA = ($amoutVat)€";
echo "Prix TTC : $priceWithTax €";
echo "Prix total TTC : $totalWithTax €";
