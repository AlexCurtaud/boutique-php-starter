<?php
require_once 'data.php';
require_once 'helpers.php';

$productName = $_GET['product_name'];
var_dump($productName);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="recherche.php" method="GET">
        <ul>
            <li><label for="name">Recherche produit</label>
                <input type="text" id="name" name="product_name" value="<?= $productName ?>">
            </li>
            <div class="button">
                <button type="submit">Filtrer</button>
            </div>
        </ul>
    </form>
    <div>
        <?= filtreProduit($productName, $product) ?>
    </div>
</body>

</html>