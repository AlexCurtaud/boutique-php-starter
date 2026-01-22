<?php

$product = [
    1 => ['name' => 'boost1', 'price' => 49.99],
    2 => ['name' => 'boost2', 'price' => 79.99],
    3 => ['name' => 'boost3', 'price' => 119.99],
    4 => ['name' => 'boost4', 'price' => 169.99],
    5 => ['name' => 'boost5', 'price' => 199.99],
];

$id = $_GET['id'] ?? null;

function productCard($product, $id)
{
    if (array_key_exists($id, $product)) {
        return $product[$id]['name'].' '.$product[$id]['price'];
    }

    return 'Please try again with validate datas';
}

echo productCard($product, $id);
