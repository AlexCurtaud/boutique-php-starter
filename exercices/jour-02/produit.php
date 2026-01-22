<?php
$product = [
    [
        'name' => 'Booster 1000',
        'description' => "Un Booster d'entrée de gamme fait pour accélerer ton boost, Un Booster d'entrée de gamme fait pour accélerer ton boost, Un Booster d'entrée de gamme fait pour accélerer ton boost",
        'price' => 199.99,
        'stock' => 12,
        'category' => 'Booster',
        'brand' => 'Maxi Boost',
        'dateAdded' => '2026-01-06',
    ],
    [
        'name' => 'Booster 2000',
        'description' => 'Un Booster de milieu de gamme fait pour un boost qui décoiffe, Un Booster de milieu de gamme fait pour un boost qui décoiffe, Un Booster de milieu de gamme fait pour un boost qui décoiffe',
        'price' => 249.99,
        'stock' => 7,
        'category' => 'Booster',
        'brand' => 'Maxi Boost',
        'dateAdded' => '2026-01-06',
    ],
    [
        'name' => 'Booster 3000',
        'description' => 'Le Booster ultime de chez Maxi Boost, avec ça vous aurez vraiment un maximum de boooooost, Le Booster ultime de chez Maxi Boost, avec ça vous aurez vraiment un maximum de boooooost, Le Booster ultime de chez Maxi Boost, avec ça vous aurez vraiment un maximum de boooooost',
        'price' => 349.99,
        'stock' => 2,
        'category' => 'Booster',
        'brand' => 'Maxi Boost',
        'dateAdded' => '2026-01-06',
    ],
];
$discount = 0.10;

function stock($product)
{
    if ($product[0]['stock'] > 0) {
        return 'En stock';
    } else {
        return 'En rupture de stock';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $product[0]['name'] ?></title>
</head>

<body>
    <nav>
        <ul style="list-style: none;">
            <li><?= $product[0]['category'] ?></li>
        </ul>
    </nav>
    <h1><?= $product[0]['name'] ?></h1>
    <h2><?= $product[0]['brand'] ?></h2>
    <p style="width: 300px"><?= $product[0]['description'] ?></p>
    <div style="display: flex; flex-direction:row; width: 300px; justify-content:space-between">
        <p><?= stock($product) ?></p>
        <p><span><strike><?= number_format($product[0]['price'], 2, ',', '.').'€' ?></strike><span>
                    <span><?= number_format($product[0]['price'] * (1 - $discount), 2, ',', '.').'€'.
                                '<br>uniquement le '.$product[0]['dateAdded'] ?></span>
        </p>
    </div>
</body>
<!-- Si j'accède à une clé qui n'existe pas, il n'y a pas de message d'erreur, juste, elle ne s'affichera pas -->

</html>