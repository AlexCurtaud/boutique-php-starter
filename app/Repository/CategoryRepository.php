<?php

class CategoryRepository
{
    public function __construct(private PDO $pdo) {}

    // /////////////////// GETTER ////////////////////////////
    public function findAll()
    {
        $finder = $this->pdo->prepare('SELECT * FROM categories');
        $finder->execute();

        return $finder->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find(int $id)
    {
        $findById = $this->pdo->prepare('SELECT * FROM categories WHERE id=?');
        $findById->execute(["$id"]);

        return $findById->fetch();
    }

    public function findWithProduct(Category $category)
    {
        $findProdbyCategory = $this->pdo->prepare('SELECT name, category FROM categories WHERE category_id=?');
        $findProdbyCategory->execute([$category->getId()]);

        return $findProdbyCategory->fetchAll(PDO::FETCH_ASSOC);
    }

    // /////////////////// SETTER ////////////////////////////

    public function create(Category $category)
    {
        $create = $this->pdo->prepare('INSERT INTO categories (nom) VALUE (?)');
        $create->execute([$category->getName()]);
        echo 'Category created';
    }

    public function update(Category $category)
    {
        $update = $this->pdo->prepare('UPDATE categories SET nom=? WHERE id=?');
        $update->execute([$category->getName(), $category->getId()]);
    }

    public function delete(Category $category)
    {
        $delete = $this->pdo->prepare('DELETE FROM categories WHERE nom=?');
        $delete->execute([$category->getName()]);
        echo 'Category deleted';
    }
}
