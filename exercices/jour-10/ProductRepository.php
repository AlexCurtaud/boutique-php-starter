<?php
class productRepository
{
    public function __construct(private PDO $pdo) {}


    ///////////////////// GETTER ////////////////////////////
    public function find(int $id): array
    {
        $findById = $this->pdo->prepare("SELECT * FROM products WHERE id=?");
        $findById->execute([$id]);
        $finder = $findById->fetch();

        return $finder;
    }

    public function findAll(): array
    {
        $findAll = $this->pdo->prepare("SELECT * FROM products");
        $findAll->execute();
        $finderAll = $findAll->fetchAll(PDO::FETCH_ASSOC);

        return $finderAll;
    }

    ////////////////////// SETTER ///////////////////////////////
    public function save(Product $product)
    {
        $create = $this->pdo->prepare("INSERT INTO products (name, price, stock) VALUE (?, ?, ?)");
        $create->execute([$product->getName(), $product->getPrice(), $product->getStock()]);
        echo "product added";
    }

    public function update(Product $product)
    {
        $update = $this->pdo->prepare("UPDATE products SET name=? , price=?, stock=? WHERE id=?");
        $update->execute([$product->getName(), $product->getPrice(), $product->getStock(), $product->getId()]);
        echo "product updated";
    }

    public function delete(Product $product)
    {
        $delete = $this->pdo->prepare("DELETE FROM products WHERE id=?");
        $delete->execute([$product->getId()]);
        echo "product deleted";
    }
}
