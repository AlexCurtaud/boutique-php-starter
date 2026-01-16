<?php

class Product
{
    public function __construct(
        private int $id,
        private string $name,
        private string $description,
        private float $price,
        private int $stock,
        private Category $category
    ) {}
    // Retourne le nom et la catégorie du produit
    public function display(): string
    {
        return $this->name . ' ' . $this->category->categoryDisplay() . '<br>';
    }
    // Retourne le prix du produit
    public function getPrice(): float
    {
        return $this->price;
    }
    // Retourne le stock du produit
    public function getStock()
    {
        return $this->stock;
    }
    // Retourne l'id du produit
    public function getId()
    {
        return $this->id;
    }
    public function increaseStock($units): int
    {
        return $this->stock + $units;
    }
    public function decreaseStock($units): int
    {
        return $this->stock - $units;
    }
}
