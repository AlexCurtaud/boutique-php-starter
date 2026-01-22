<?php

class Product
{
    public function __construct(
        public int $id,
        public string $nom,
        public string $description,
        public float $prix,
        public int $stock,
        public string $category
    ) {}
}

$array = [
    $boost1 = new Product(1, 'boost100', 'boost is cool', 99.99, 20, 'Booster'),
    $boost2 = new Product(2, 'boost200', 'boost is quite cool', 199.99, 50, 'Booster'),
    $boost3 = new Product(3, 'boost500', 'boost is very cool', 299.99, 5, 'Booster'),
    $boost4 = new Product(4, 'boost1000', 'boost is super cool', 399.99, 13, 'Booster'),
    $boost5 = new Product(5, 'boost2000', 'boost is hyper cool', 499.99, 10, 'Booster'),
];

foreach ($array as $products) {
    $totalStock += $products->stock;
    $totalAmount += $products->stock * $products->prix;
    echo $products->id, $products->nom, $products->description, $products->prix, $products->stock, $products->category.'<br>';
}

echo $totalStock;
echo '<br>';
echo $totalAmount;
