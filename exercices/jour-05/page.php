<?php
require_once 'helpers.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?= displayBadge('Boost', 'green') ?>
    <?= displayPrice(150, $discount = 0.2) ?>
    <?= displayStock(0) ?>
</body>

</html>