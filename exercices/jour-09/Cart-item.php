<?php

class CartItem
{
    public function __construct(
        private Product $product,
        private int $quantity = 1
    ) {}

    public function getTotal()
    {
        return $this->quantity * $this->product->getPrice();
    }

    public function add(int $units)
    {
        if ($units < $this->product->getStock() - $this->quantity) {
            return $this->quantity += max(1, $units);
        }
        echo 'Not enough quantity in stock';
    }

    public function remove(int $units)
    {
        return $this->quantity -= $units;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }
}
