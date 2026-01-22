<?php

$product = [
    [
        'name' => 'Ski 1000',
        'price' => 349.99,
        'stock' => 12,
    ],
    [
        'name' => 'Ski 1500',
        'price' => 449.99,
        'stock' => 16,
    ],
    [
        'name' => 'Ski 2000',
        'price' => 599.99,
        'stock' => 5,
    ],
    [
        'name' => 'Snowboard 1000',
        'price' => 399.99,
        'stock' => 19,
    ],
    [
        'name' => 'Snowboard 2000',
        'price' => 549.99,
        'stock' => 9,
    ],
];

foreach ($product as $product) {
    echo '<article>'.
        '<h3>'.$product['name'].'</h3>'.
        '<p>'.$product['price'].'€</p>'.
        '<p>'.$product['stock'].'</p>'.
        '</article>';
}
