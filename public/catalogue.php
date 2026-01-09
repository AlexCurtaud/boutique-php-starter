<?php
// starter-project/public/catalogue.php
require_once __DIR__ . '/../app/data.php';
// $products est maintenant disponible

function pricing($product)
{
    if (!$product["discount"] > 0) {
        return '<p class="price">' . number_format($product["price"], 2) . ' €</p>';
    } else {
        return '<p class="price-discounted">' . number_format($product["price"] * (1 - $product["discount"]), 2) . ' €' . '<strike>' . number_format($product["price"], 2) . ' €</strike></p>';
    }
}

function enStock($product)
{
    if ($product["stock"] > 0) {
        return '<p class="available" , "stock">Size Available</p>';
    } else {
        return '<p class="not-available" , "stock">Out of Stock</p>';
    }
}

function ficheProduit($product)
{
    foreach ($product as $product) {
        if ($product["stock"] > 0) {
            $new = $product["new"] ? '<p class="badge badgeNew">NEW!</p>' : "";
            $discounted = $product["discount"] > 0 ? '<p class="badge badgePromo">' . $product["discount"] * 100 . '% OFF</p>' : "";
            $derniers = ($product["stock"] > 0 && $product["stock"] < 5) ? '<p class="badge badgeDerniers"> Last Units' : "";
            echo '<div class="product-card">' . '<div class="img-plus-badge">' . '<img src="' . $product["images"] . '" alt="' . $product["name"] . '">' .
                $new . $discounted . $derniers . '</div>' . '<h3 class=product-name>' . $product["name"] . '</h3>' .
                pricing($product) . '<button class="button-basket button-available">Add to Basket</button>' . '</div>';
        } else {
            $rupture = $product["stock"] === 0 ? '<p class="badge badgeRupture">RUPTURE</p>' : "";
            echo '<div class="product-card product-card-not-available">' . '<div class="img-plus-badge">' . '<img src="' . $product["images"] . '" alt="' . $product["name"] . '">' .
                $rupture . '</div>' . '<h3 class=product-name>' . $product["name"] . '</h3>' . '<p class="price">' . number_format($product["price"], 2) . ' €</p>' . '<button disabled class="button-basket button-not-available">Add to Basket
                </button>' . '</div>';
        }
    }
}

for ($i = 0; $i < 11; $i++) {
    $stockDispo += $product[$i]["stock"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Snowboard Boots</title>
</head>

<body>
    <div class="Upper-Catalog">
        <h1>Chaussures de Snowboard</h1>
        <h2>Les modèles</h2>
    </div>
    <p class="nb-produit-affiche"><?= count($product) . ' produits affichés' ?></p>
    <p class="nb-produit-stock">
        <?= $stockDispo . ' products available'; ?>
    </p>
    <div class="catalog-flex">
        <?= ficheProduit($product) ?>
    </div>
</body>

</html>