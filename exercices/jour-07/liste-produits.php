<?php

$pdo = new PDO(
    "mysql:host=localhost;dbname=boutique;charset=utf8mb4",
    "dev",
    "dev",
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

$selectAll = $pdo->prepare("SELECT name, price, stock FROM products");
$selectAll->execute();

$product = $selectAll->fetchAll(PDO::FETCH_ASSOC);
var_dump($product);
echo '<br>';
echo '<br>';
