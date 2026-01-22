<?php
$discount = 0.2;
$product = [
    'name' => 'Chaussure',
    'price' => number_format(99.00, 2),
    'stock' => 4,
    'onSale' => true,
];

// Ici la méthode if/else
// if ($product["stock"] > 0) {
//     echo '<div class="inStock">' .
//         '<h3>' . $product["name"] . '</h3>';
//     if ($product["onSale"]) {
//         echo '<p>' . '<strike>' . $product["price"] . '</strike>' . '  ' . $product["price"] * (1 - $discount) . '</p>' .
//             '<p>🔥 PROMO</p>' .
//             '</div>';
//     } else {
//         echo '<p>' . $product["price"] . '</p>' .
//             '</div>';
//     }
// } else {
//     echo '<div class="outOfStock">' .
//         '<h3>' . $product["name"] . '</h3>' .
//         '<p>' . $product["price"] . '</p>' .
//         '</div>';
// }

// Ici la méthode ternary

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produit</title>
</head>

<body>
    <div class="<?= $product['stock'] > 0 ? 'inStock' : 'outOfStock'; ?>">
        <h3><?= $product['name'] ?><?= $product['onSale'] ? '  🔥 PROMO' : ''; ?></h3>
        <p><?= ! $product['onSale'] ? $product['price'].'€' : '<strike>'.$product['price'].'€</strike>'.' '.number_format($product['price'] * (1 - $discount), 2).'€'; ?></p>
    </div>
</body>

</html>