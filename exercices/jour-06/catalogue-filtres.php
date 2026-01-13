<?php
require_once "data.php";
require_once "helpers.php";

$productName = $_GET["product_name"] ?? "";
$minPrice = $_GET["min-price"] ?? 0;
$maxPrice = $_GET["max-price"] ?? 1000;
$category = $_GET["category"] ?? "";
$stock = $_GET["stock"] ?? "";

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
    <form action="catalogue-filtres.php" method="GET">
        <ul>
            <li><label for="name">Recherche produit</label>
                <input type="text" id="name" name="product_name" value="<?= $productName ?>">
            </li>
            <li><label for="pricing">Price (min/max)</label>
                <input type="number" id="pricing" name="min-price" value="<?= $minPrice ?>">
                <input type="number" id="pricing" name="max-price" value="<?= $maxPrice ?>">
            </li>
            <li><label for="category-select">Category</label>
                <select name="category" id="category-select">
                    <option value="">Select Category</option>
                    <option value="Men" <?= $category === "Men" ? "selected" : NULL ?>>Men</option>
                    <option value="Women" <?= $category === "Women" ? "selected" : NULL ?>>Women</option>
                    <option value="Kids" <?= $category === "Kids" ? "selected" : NULL ?>>Kids</option>
                </select>
            </li>
            <li><label for="en-stock">Available in stock</label>
                <input type="checkbox" id="en-stock" name="stock" value="true" <?= $stock === "true" ? "checked" : NULL ?>>
            </li>
            <div class="button">
                <button type="submit">Filter</button>
            </div>
        </ul>
    </form>
    <div>
        <?php filterOn($product, $productName, $minPrice, $maxPrice, $category, $stock) ?>
    </div>
</body>

</html>