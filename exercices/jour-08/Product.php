<?php

class Product
{
    public function __construct(
        public int $id,
        public string $nom,
        public string $description,
        public float $prix,
        public int $stock,
        public string $category
    ) {}

    public function getPriceIncludingTax(float $vat = 20)
    {
        return $this->prix * (1 + $vat / 100);
    }

    public function isInStock(): bool
    {
        if ($this->stock > 0) {
            return true;
        }

        return false;
    }

    public function reduceStock(int $qty)
    {
        if ($qty <= $this->stock) {
            $this->stock -= $qty;

            return $this->stock;
        }
    }

    public function applyDiscount(float $percentage)
    {
        return $this->prix * (1 - $percentage / 100);
    }
}

$boost = new Product(1, 'boost', 'boost is cool', 99.99, 20, 'Booster');

echo $boost->getPriceIncludingTax();
echo '<br>';
echo $boost->isInStock();
echo '<br>';
echo $boost->reduceStock(20);
echo '<br>';
echo $boost->applyDiscount(20);
echo $boost;
