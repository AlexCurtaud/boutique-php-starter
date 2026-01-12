<?php
// starter-project/public/catalogue.php
require_once __DIR__ . '/../app/data.php';
// $products est maintenant disponible

require_once "helpers.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
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