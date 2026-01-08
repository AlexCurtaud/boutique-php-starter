<?php
$todayDate = date("Y-m-d");
$product = [
    "name" => "Pomme",
    "stock" => 0,
    "active" => false,
    "promoEndDate" => "2025-01-30"
];

if ($product["stock"] > 0 && $product["active"]) {
    echo "<p>The product is available</p>";
} else {
    echo "<p>The product is not available</p>";
}

var_dump($product["promoEndDate"], $todayDate);

if ($product["promoEndDate"] > $todayDate) {
    echo "<p>The product is discounted</p>";
} else {
    echo "<p>The product is not discounted</p>";
}
