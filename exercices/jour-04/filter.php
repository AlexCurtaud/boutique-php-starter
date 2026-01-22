<?php

$product = [
    [
        'name' => 'Infuse Snowsurf',
        'price' => 460.00,
        'stock' => 5,
        'category' => 'Men Snowboard Boot',
    ],
    [
        'name' => 'Invado OG',
        'price' => 265.00,
        'stock' => 0,
        'category' => 'Men Snowboard Boot',
    ],
    [
        'name' => 'Hi-Standard OG',
        'price' => 250.00,
        'stock' => 7,
        'category' => 'Men Snowboard Boot',
    ],
    [
        'name' => 'Encore OG Women',
        'price' => 265.00,
        'stock' => 3,
        'category' => 'Women Snowboard Boots',
    ],
    [
        'name' => 'Hi-Standard OG Women',
        'price' => 250.00,
        'stock' => 0,
        'category' => 'Women Snowboard Boots',
    ],
    [
        'name' => 'Luna Pro',
        'price' => 355.00,
        'stock' => 11,
        'category' => 'Women Snowboard Boots',
    ],
    [
        'name' => 'Aura Pro',
        'price' => 375.00,
        'stock' => 15,
        'category' => 'Men Snowboard Boot',
    ],
    [
        'name' => 'Invado Pro',
        'price' => 350.00,
        'stock' => 15,
        'category' => 'Men Snowboard Boot',
    ],
    [
        'name' => 'Hi-Standard Pro',
        'price' => 350.00,
        'stock' => 6,
        'category' => 'Men Snowboard Boot',
    ],
    [
        'name' => 'Invado Pro Women',
        'price' => 350.00,
        'stock' => 6,
        'category' => 'Women Snowboard Boots',
    ],
];

for ($i = 0; $i < 11; $i++) {
    if ($product[$i]['stock'] > 0 && $product[$i]['price'] <= 300) {
        echo '<div>'.
            '<h3>'.$product[$i]['name'].'</h3>'.
            '<p>'.$product[$i]['price'].'€</p>'.
            '</div>';
        $productDisplayed++;
    }
}

echo $productDisplayed.' products out of '.count($product);
