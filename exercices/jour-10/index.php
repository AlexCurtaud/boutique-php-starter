<?php
require_once "../jour-09/Product.php";
require_once "../jour-09/Category.php";
require_once "../jour-09/Cart-item.php";
require_once "../jour-09/Cart.php";
require_once "../jour-09/User.php";
require_once "../jour-09/Address.php";
require_once "../jour-09/Order.php";
require_once "ProductRepository.php";

try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=boutique;charset=utf8mb4",
        "dev",
        "dev",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    echo "✅ Connexion réussie !";
} catch (PDOException $e) {
    echo "❌ Erreur : " . $e->getMessage();
}

$repo = new productRepository($pdo);

$ski = new Category(1, "Ski", "Skis are two planks that get you down a mountain");
$snowboard = new Category(2, "Snowboard", "Snowboard is one large planks that get you down the mountain");

$ski1 = new Product(1, "Ski 1000", "Basic Ski", 199.99, 12, $ski);
$ski2 = new Product(2, "Ski 2000", "Average Ski", 299.99, 6, $ski);
$ski3 = new Product(3, "Ski 3000", "Good Ski", 399.99, 15, $ski);

$snowboard1 = new Product(4, "Snowboard 1500", "Average snowboard", 249.99, 9, $snowboard);
$snowboard2 = new Product(5, "Snowboard 2500", "Good snowboard", 349.99, 11, $snowboard);

//$repo->save($ski1);
$ski1->priceChange(299.99);
echo $ski1->getPrice();
//$repo->update($ski2);
$repo->delete($ski2);
