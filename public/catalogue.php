<?php
// starter-project/public/catalogue.php
require_once __DIR__ . '/../app/data.php';
// $products est maintenant disponible
?>
<!DOCTYPE html>
<html lang="en">+

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Catalogue</title>
</head>

<body style="margin: 0px">
    <h1 style="text-align: center;">Catalogue Produit</h1>
    <div style="display: flex; flex-direction: row; flex-wrap:wrap; justify-content: center">
        <div style=" padding: 30px; text-align: center; width: 25%">
            <h2><?= $product[0]["name"] ?></h2>
            <p><?= $product[0]["price"] ?>€</p>
            <p>Quantité en stock : <?= $product[0]["stock"] ?></p>
        </div>
        <div style="padding: 30px; text-align: center; width: 25%">
            <h2><?= $product[1]["name"] ?></h2>
            <p><?= $product[1]["price"] ?>€</p>
            <p>Quantité en stock : <?= $product[1]["stock"] ?></p>
        </div>
        <div style="padding: 30px; text-align: center; width: 25%">
            <h2><?= $product[2]["name"] ?></h2>
            <p><?= $product[2]["price"] ?>€</p>
            <p>Quantité en stock : <?= $product[2]["stock"] ?></p>
        </div>
        <div style="padding: 30px; text-align: center; width: 25%">
            <h2><?= $product[3]["name"] ?></h2>
            <p><?= $product[3]["price"] ?>€</p>
            <p>Quantité en stock : <?= $product[3]["stock"] ?></p>
        </div>
        <div style="padding: 30px; text-align: center; width: 25%">
            <h2><?= $product[4]["name"] ?></h2>
            <p><?= $product[4]["price"] ?>€</p>
            <p>Quantité en stock : <?= $product[4]["stock"] ?></p>
        </div>
        <div style="padding: 30px; text-align: center; width: 25%">
            <h2><?= $product[5]["name"] ?></h2>
            <p><?= $product[5]["price"] ?>€</p>
            <p>Quantité en stock : <?= $product[5]["stock"] ?></p>
        </div>
    </div>
</body>

</html>