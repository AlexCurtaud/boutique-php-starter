<?php
require_once "../jour-09/Product.php";
require_once "../jour-09/Category.php";
require_once "../jour-09/Cart-item.php";
require_once "../jour-09/Cart.php";
require_once "../jour-09/User.php";
require_once "../jour-09/Address.php";
require_once "../jour-09/Order.php";
require_once "ProductRepository.php";
require_once "CategoryRepository.php";
require_once "UserRepository.php";
require_once "DataBase.php";

$pdo = DataBase::getInstance();

$prod = new productRepository($pdo);
$cat = new CategoryRepository($pdo);
$use = new UserRepository($pdo);

// $ski = new Category(1, "Ski", "Skis are two planks that get you down a mountain");
// $snowboard = new Category(2, "Snowboard", "Snowboard is one large planks that get you down the mountain");

// $ski1 = new Product(1, "Ski 1000", "Basic Ski", 199.99, 12, $ski);
// $ski2 = new Product(2, "Ski 2000", "Average Ski", 299.99, 6, $ski);
// $ski3 = new Product(3, "Ski 3000", "Good Ski", 399.99, 15, $ski);

// $snowboard1 = new Product(4, "Snowboard 1500", "Average snowboard", 249.99, 9, $snowboard);
// $snowboard2 = new Product(5, "Snowboard 2500", "Good snowboard", 349.99, 11, $snowboard);

//$john = new User("John", "john@gmail.com", "haricotrouge");

$oneObject = $prod->find(12);
var_dump($oneObject);

var_dump($use->findByEmail("john@gmail.com"));
