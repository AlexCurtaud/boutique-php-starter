<?php

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$router = require __DIR__.'/../config/routes.php';
$router->dispatch($uri, $method);
