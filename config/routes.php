<?php

require_once "../app/Router.php";
require_once "../app/Controller/HomeController.php";
require_once "../app/Controller/ProductController.php";

$router = new Router();
// Pages Publiques
$router->get('/', [HomeController::class, 'index']);
$router->get('/products', [ProductController::class, 'index']);
$router->get('/produit/{id}', [ProductController::class, 'show']);

return $router;
