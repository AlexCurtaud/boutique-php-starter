<?php

$price = calculateIncludingTax(100, 0.2);
function calculateVAT($priceExcludingTax, $rate)
{
    return $priceExcludingTax * $rate;
}

function calculateIncludingTax($priceExcludingTax, $rate)
{
    return $priceExcludingTax * (1 + $rate);
}

function calculateDiscount($price, $percentage)
{
    return $price * $percentage;
}

echo 'Prix HT = ' . calculateIncludingTax(100, 0.2) - calculateVAT(100, 0.2) . ' €' .
    '<br>TVA = ' . calculateVAT(100, 0.2) . ' €' .
    '<br>Prix TTC = ' . calculateIncludingTax(100, 0.2) . ' €' .
    '<br>remise = ' . calculateDiscount($price, 0.1) . ' €' .
    '<br>Prix Total = ' . calculateIncludingTax(100, 0.2) - calculateDiscount($price, 0.1) . ' €';
