<?php
function displayBadge($text, $color)
{
    return '<span class="badge" style="background: ' . $color . '">' . '$text' . '</span>';
}

function displayPrice($price, $discount = 0)
{
    if ($discount === 0) {
        return $price . ' €';
    } else {
        return '<span><strike>' . $price . ' €</strike></span>';
    }
}

function displayStock($quantity)
{
    if ($quantity === 0) {
        return '<span style="color: red">Rutpure</span>';
    } else if ($quantity > 0 && $quantity < 4) {
        return '<span style="color: orange">Dernières unités disponibles</span>';
    } else {
        return '<span style="color: green">En stock</span>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?= displayBadge("Boost", "green") ?>
    <?= displayPrice(150, $discount = 0.2) ?>
    <?= displayStock(0) ?>
</body>

</html>