<?php

require_once 'Product.php';
require_once 'Category.php';
require_once 'Cart-item.php';
require_once 'Cart.php';
require_once 'User.php';
require_once 'Address.php';
require_once 'Order.php';
require_once '../jour-10/ProductRepository.php';

$ski = new Category(1, 'Ski', 'Skis are two planks that get you down a mountain');
$snowboard = new Category(2, 'Snowboard', 'Snowboard is one large planks that get you down the mountain');

$ski1 = new Product(1, 'Ski 1000', 'Basic Ski', 199.99, 12, $ski);
$ski2 = new Product(2, 'Ski 2000', 'Average Ski', 299.99, 6, $ski);
$ski3 = new Product(3, 'Ski 3000', 'Good Ski', 399.99, 15, $ski);

$snowboard1 = new Product(4, 'Snowboard 1500', 'Average snowboard', 249.99, 9, $snowboard);
$snowboard2 = new Product(5, 'Snowboard 2500', 'Good snowboard', 349.99, 11, $snowboard);

echo $ski1->display();
echo $ski2->display();
echo $ski3->display();
echo $snowboard1->display();
echo $snowboard2->display();

$cart = new Cart;
$cart->addProduct($ski1);
$cart->addProduct($snowboard1);
$cart->update($ski1, 1);
$cart->update($ski1, 6);
$cart->update($ski1, 2);
$cart->update($ski1, 1);

// $cart2 = new Cart();
// $cart2->addProduct($snowboard2, 3)->addProduct($ski3, 7)->update($snowboard2, -2);

$bobby = new User('bobby', 'bobby@gmail.com');
$bobby->addAddress('Grove Street 1', 'LA', 15542, 'USA');
$bobby->addAddress('Grove Street 5', 'LA', 15542, 'USA');

var_dump($bobby->getAddresses());
$bobby->getDefaultAddress();

// echo $cart->getTotalCart();
// echo '<br>';
// echo $cart->differentItem();
// echo '<br>';
// echo $cart->count();

$order1 = new Order(1, $bobby, $cart);
echo $order1->getTotal();
echo $order1->getItemCount();
