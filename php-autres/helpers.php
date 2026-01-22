<?php

function pricing($product)
{
    if (! $product['discount'] > 0) {
        return '<p class="price">'.number_format($product['price'], 2).' €</p>';
    } else {
        return '<p class="price-discounted">'.number_format($product['price'] * (1 - $product['discount']), 2).' €'.'<strike>'.number_format($product['price'], 2).' €</strike></p>';
    }
}

// fonction pour changer la class en fonction
function enStock($product)
{
    if ($product['stock'] > 0) {
        return '<p class="available" , "stock">Size Available</p>';
    } else {
        return '<p class="not-available" , "stock">Out of Stock</p>';
    }
}

function ficheProduit($product)
{
    foreach ($product as $product) {
        if ($product['stock'] > 0) {

            $new = $product['new'] ? '<p class="badge badgeNew">NEW!</p>' : '';
            $discounted = $product['discount'] > 0 ? '<p class="badge badgePromo">'.$product['discount'] * 100 .'% OFF</p>' : '';
            $derniers = ($product['stock'] > 0 && $product['stock'] < 5) ? '<p class="badge badgeDerniers"> Last Units' : '';
            echo '<div class="product-card">'.'<div class="img-plus-badge">'.'<img src="'.$product['images'].'" alt="'.$product['name'].'">'.
                $new.$discounted.$derniers.'</div>'.'<h3 class=product-name>'.$product['name'].'</h3>'.
                pricing($product).'<button class="button-basket button-available">Add to Basket</button>'.'</div>';
        } else {
            $rupture = $product['stock'] === 0 ? '<p class="badge badgeRupture">RUPTURE</p>' : '';
            echo '<div class="product-card product-card-not-available">'.'<div class="img-plus-badge">'.'<img src="'.$product['images'].'" alt="'.$product['name'].'">'.
                $rupture.'</div>'.'<h3 class=product-name>'.$product['name'].'</h3>'.'<p class="price">'.number_format($product['price'], 2).' €</p>'.'<button disabled class="button-basket button-not-available">Add to Basket
                </button>'.'</div>';
        }
    }
}

for ($i = 0; $i < 11; $i++) {
    $stockDispo += $product[$i]['stock'];
}
