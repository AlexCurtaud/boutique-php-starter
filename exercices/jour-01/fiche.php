<?php
$name = "Raquette";
$price = 199.99;
$stock = 3;

function enStock($stock)
{
    if ($stock > 0)
        echo "En stock";
    else
        echo "Rupture de stock";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $name ?></title>
</head>

<body>
    <h1>Raquette de Tennis</h1>
    <p>Pour la modique somme de <?= $price ?>€ <br>
        <span><?= enStock($stock) ?></span>
    </p>
</body>

</html>