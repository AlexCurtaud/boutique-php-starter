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

var_dump($product[2]['name']);
echo '<br>';
var_dump($product[0]['price']);
echo '<br>';
var_dump($product[4]['stock']);
echo '<br>';
$product[1]['stock'] += 10;
var_dump($product[1]['stock']);
