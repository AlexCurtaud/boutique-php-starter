<?php

$product = [
    [
        "name" => "Ski 1000",
        "price" => 99.99,
        "stock" => 12,
    ],
    [
        "name" => "Ski 1500",
        "price" => 99.99,
        "stock" => 2,
    ],
    [
        "name" => "Ski 2000",
        "price" => 99.99,
        "stock" => 5,
    ],
    [
        "name" => "Ski 2500",
        "price" => 99.99,
        "stock" => 12,
    ],
    [
        "name" => "Ski 3000",
        "price" => 999.99,
        "stock" => 2,
    ],
    [
        "name" => "Ski 5000",
        "price" => 1199.99,
        "stock" => 2,
    ],
    [
        "name" => "Snowboard 1000",
        "price" => 99.99,
        "stock" => 19,
    ],
    [
        "name" => "Snowboard 2000",
        "price" => 549.99,
        "stock" => 9,
    ],
    [
        "name" => "Snowboard 4000",
        "price" => 799.99,
        "stock" => 4,
    ],
    [
        "name" => "Snowboard 5000",
        "price" => 999.99,
        "stock" => 0,
    ]
];

// // Le foreach ici permet d'arrêter d'afficher les produits dès que le prix d'un des produits dépassent 100€
// foreach ($product as $product) {
//     if ($product["stock"] === 0) {
//         continue;
//     } else if ($product["price"] > 100) {
//         break;
//     }
//     echo $product["name"] . '<br>' .
//         $product["price"] . '€<br>' .
//         $product["stock"] . '<br>';
// }

// Cette boucle permet de n'afficher uniquement les produits dont le stock est supérieur à 0 et dont le prix est inférieur à 100€
foreach ($product as $product) {
    if ($product["stock"] > 0 && $product["price"] < 100) {
        echo $product["name"] . '<br>' .
            $product["price"] . '€<br>' .
            $product["stock"] . '<br>';
    }
}
