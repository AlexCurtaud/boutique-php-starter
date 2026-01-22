<?php

$product = [
    [
        'name' => 'Infuse Snowsurf',
        'price' => 460.00,
        'stock' => 5,
        'images' => 'https://assets.vans.eu/images/t_img/c_fill,g_center,f_auto,h_815,e_unsharp_mask:100,w_652/dpr_2.0/v1751996095/VN000CZ8F89-HERO/Infuse-Snowsurf-Snowboard-Boots.jpg',
        'size' => [25, 26, 27, 27.5, 29.5],
        'new' => true,
        'discount' => 0,
    ],
    [
        'name' => 'Invado OG',
        'price' => 265.00,
        'stock' => 0,
        'images' => 'https://assets.vans.eu/images/t_img/c_fill,g_center,f_auto,h_815,e_unsharp_mask:100,w_652/dpr_2.0/v1751997550/VN0A54FMY28-HERO/Men-Invado-OG-MTE-Snowboard-Boots.jpg',
        'size' => [],
        'new' => false,
        'discount' => 0.2,
    ],
    [
        'name' => 'Hi-Standard OG',
        'price' => 250.00,
        'stock' => 7,
        'images' => 'https://assets.vans.eu/images/t_img/c_fill,g_center,f_auto,h_815,e_unsharp_mask:100,w_652/dpr_2.0/v1751997550/VN0A54FMY28-HERO/Men-Invado-OG-MTE-Snowboard-Boots.jpg',
        'size' => [25, 26, 27.5, 28, 29],
        'new' => false,
        'discount' => 0.2,
    ],
    [
        'name' => 'Encore OG Women',
        'price' => 265.00,
        'stock' => 3,
        'images' => 'https://assets.vans.eu/images/t_img/c_fill,g_center,f_auto,h_815,e_unsharp_mask:100,w_652/dpr_2.0/v1751997518/VN0A3TFPLLC-HERO/Womens-Encore-OG-Snowboard-Boots.jpg',
        'size' => [24, 24.5, 25],
        'new' => false,
        'discount' => 0.2,
    ],
    [
        'name' => 'Hi-Standard OG Women',
        'price' => 250.00,
        'stock' => 0,
        'images' => 'https://assets.vans.eu/images/t_img/c_fill,g_center,f_auto,h_815,e_unsharp_mask:100,w_652/dpr_2.0/v1751997523/VN0A3TFS2N1-HERO/Womens-HiStandard-OG-Snowboard-Boots.jpg',
        'size' => [],
        'new' => false,
        'discount' => 0.2,
    ],
    [
        'name' => 'Luna Pro',
        'price' => 355.00,
        'stock' => 11,
        'images' => 'https://assets.vans.eu/images/t_img/c_fill,g_center,f_auto,h_815,e_unsharp_mask:100,w_652/dpr_2.0/v1751996623/VN000DC3EMV-HERO/Womens-Luna-Pro-Snowboard-Boots.jpg',
        'size' => [24, 24.5, 25, 26, 26.5],
        'new' => true,
        'discount' => 0,
    ],
    [
        'name' => 'Aura Pro',
        'price' => 375.00,
        'stock' => 15,
        'images' => 'https://assets.vans.eu/images/t_img/c_fill,g_center,f_auto,h_815,e_unsharp_mask:100,w_652/dpr_2.0/v1751997553/VN0A54G1EMF-HERO/Aura-Pro-Snowboard-Boots.jpg',
        'size' => [26.5, 27, 27.5, 28, 29, 29.5],
        'new' => false,
        'discount' => 0.2,
    ],
    [
        'name' => 'Invado Pro',
        'price' => 350.00,
        'stock' => 15,
        'images' => 'https://assets.vans.eu/images/t_img/c_fill,g_center,f_auto,h_815,e_unsharp_mask:100,w_652/dpr_2.0/v1758031570/VN0A54FNB9M-HERO/Invado-Pro-Snowboard-Boots.jpg',
        'size' => [25, 26, 26.5, 27, 29, 29.5],
        'new' => true,
        'discount' => 0,
    ],
    [
        'name' => 'Hi-Standard Pro',
        'price' => 350.00,
        'stock' => 6,
        'images' => 'https://assets.vans.eu/images/t_img/c_fill,g_center,f_auto,h_815,e_unsharp_mask:100,w_652/dpr_2.0/v1751997509/VN0A3TFKBA2-HERO/Men-HiStandard-Pro-MTE-Snowboard-Boots.jpg',
        'size' => [25, 26.5, 27.5, 28, 29, 29.5],
        'new' => true,
        'discount' => 0,
    ],
];

function pricing($product)
{
    if (! $product['discount'] > 0) {
        return '<p class="price">'.number_format($product['price'], 2).' €</p>';
    } else {
        return '<p class="price-discounted">'.number_format($product['price'] * (1 - $product['discount']), 2).' €'.'<strike>'.number_format($product['price'], 2).' €</strike></p>';
    }
}

function enStock($product)
{
    if ($product['stock'] > 0) {
        return '<p class="available", "stock">Size Available</p>';
    } else {
        return '<p class="not-available", "stock">Out of Stock</p>';
    }
}

function ficheProduit($product)
{
    foreach ($product as $product) {
        if ($product['stock'] > 0) {
            $new = $product['new'] ? '<p class="badge badgeNew">NEW!</p>' : '';
            $discounted = $product['discount'] > 0 ? '<p class="badge badgePromo">'.$product['discount'] * 100 .'% OFF</p>' : '';
            $derniers = ($product['stock'] > 0 && $product['stock'] < 5) ? '<p class="badge badgeDerniers"> Last Units' : '';
            echo '<div class="product-card">'.
                '<div class="img-plus-badge">'.
                '<img src="'.$product['images'].'" alt="'.$product['name'].'">'.
                $new.$discounted.$derniers.
                '</div>'.
                '<h3 class=product-name>'.$product['name'].'</h3>'.
                pricing($product).
                '<button class="button-basket button-available">Add to Basket</button>'.
                '</div>';
        } else {
            $rupture = $product['stock'] === 0 ? '<p class="badge badgeRupture">RUPTURE</p>' : '';
            echo '<div class="product-card product-card-not-available">'.
                '<div class="img-plus-badge">'.
                '<img src="'.$product['images'].'" alt="'.$product['name'].'">'.
                $rupture.
                '</div>'.
                '<h3 class=product-name>'.$product['name'].'</h3>'.
                '<p class="price">'.number_format($product['price'], 2).' €</p>'.
                '<button disabled class="button-basket button-not-available">Add to Basket
                </button>'.
                '</div>';
        }
    }
}

for ($i = 0; $i < 11; $i++) {
    $stockDispo += $product[$i]['stock'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Snowboard Boots</title>
</head>

<body>
    <div class="Upper-Catalog">
        <h1>Chaussures de Snowboard</h1>
        <h2>Les modèles</h2>
    </div>
    <p class="nb-produit-affiche"><?= count($product).' produits affichés' ?></p>
    <p class="nb-produit-stock">
        <?= $stockDispo.' products available'; ?>
    </p>
    <div class="catalog-flex">
        <?= ficheProduit($product) ?>
    </div>
</body>

</html>