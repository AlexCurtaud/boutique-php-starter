<?php
class ProductRepository
{
    public function __construct(private PDO $pdo) {}


    ///////////////////// GETTER ////////////////////////////
    public function read()
    {
        foreach ($this->findAll() as $lines) {
            echo $lines['name'] . ' ' . $lines["price"] . ' ' . $lines["stock"] . '<br>';
        }
    }

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

    public function findByCategory(int $id)
    {
        $findByCat = $this->pdo->prepare("SELECT * FROM products WHERE category_id = ?");
        $findByCat->execute([$id]);
    }

    public function findInStock()
    {
        foreach ($this->findAll() as $lines) {
            if ($lines['stock'] > 0) {
                echo $lines['name'] . ' ' . $lines["price"] . ' ' . $lines["stock"] . '<br>';
            }
        }
    }

    public function getByPriceRange(int $min = 0, int $max)
    {
        foreach ($this->findAll() as $lines) {
            if ($lines['price'] >= $min && $lines['price'] < $max) {
                echo $lines['name'] . ' ' . $lines["price"] . ' ' . $lines["stock"] . '<br>';
            }
        }
    }

    public function search($search)
    {
        $searching = $this->pdo->prepare("SELECT * FROM products WHERE name LIKE ?");
        $searching->execute(['%' . $search . '%']);
        $searched = $searching->fetchAll(PDO::FETCH_ASSOC);
        return $searched;
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
