<?php
class ProductRepository
{
    public function __construct(private PDO $pdo) {}


    ///////////////////// READ ////////////////////////////
    public function find(int $id): ?Product
    {
        $findById = $this->pdo->prepare("SELECT * FROM products WHERE id=?");
        $findById->execute([$id]);
        $data = $findById->fetch();

        return $data ? $this->hydrate($data) : null;
    }

    public function findAll(): array
    {
        $findAll = $this->pdo->prepare("SELECT * FROM products");
        $findAll->execute();

        return array_map([$this, 'hydrate'], $findAll->fetchAll());
    }

    ///////////////////// GETTER ////////////////////////////
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
        $create = $this->pdo->prepare("INSERT INTO products (name, price, description, stock) VALUE (?, ?, ?)");
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

    // Hydratation : tableau → objet
    private function hydrate(array $data): Product
    {
        if (!empty($data['category_id'])) {
            $catFinder = $this->pdo->prepare("SELECT id, nom FROM categories WHERE id=?");
            $catFinder->execute([$data['category_id']]);
            $finder = $catFinder->fetch();
            $category = new Category($finder['id'], $finder['nom']);
        }

        return new Product(
            (int) $data['id'],
            $data['name'],
            $data['description'],
            (float) $data['price'],
            (int) $data['stock'],
            $category
        );
    }
}
