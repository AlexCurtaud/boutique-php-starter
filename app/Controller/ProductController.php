<?php

require_once __DIR__.'/../../config/DataBase.php';
require_once __DIR__.'/../Repository/ProductRepository.php';

class ProductController
{
    private ProductRepository $repository;

    public function __construct()
    {
        $pdo = Database::getInstance();
        $this->repository = new ProductRepository($pdo);
    }

    public function index(): void
    {
        $products = $this->repository->findAll();
        var_dump($products);
        require __DIR__.'/../../views/product/index.php';
    }

    public function show(): void
    {
        $id = $_GET['id'] ?? null;
        if (! $id) {
            $this->redirect('/products');

            return;
        }
        $product = $this->repository->find($id);
        var_dump($product);

        if (! $product) {
            http_response_code(404);
            require __DIR__.'/../views/errors/404.php';

            return;
        }
    }

    protected function redirect(string $url)
    {
        header('Location: $url');
        exit;
    }
}
