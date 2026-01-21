<?php

class Cart
{
    private array $items = [];

    //Add a new product if it doesn't exist yet. It will update it if it already exists
    public function addProduct(Product $product, int $quantity = 1): void
    {
        $id = $product->getId();
        if (isset($this->items[$id])) {
            $currentQuantity = $this->items[$id]->getQuantity();
            $this->items[$id]->add($currentQuantity + $quantity);
        } else {
            // New product
            $this->items[$id] = new CartItem($product, $quantity);
            var_dump($this->items[$id]);
            echo "<br><br>";
        }
    }

    // Supress a product from the cart
    public function remove($productID)
    {
        unset($this->items[$productID]);
    }

    // Add or remove units of the product from the cart
    public function update(Product $product, $quantity)
    {
        $id = $product->getId();
        if ($quantity > 0 ) {
            $this->items[$id]->add($quantity);
        } else if ($quantity < 0) {
            $qty = $quantity * (-1);
            $this->items[$id]->remove($qty);
            if ($this->items[$id]->getQuantity() === 0) {
                unset($this->items[$id]);
            }
        }
    }

    public function getTotalCart(): float
    {
        foreach ($this->items as $item) {
            $total += $item->getTotal();
        }
        return $total;
    }

    public function differentItem(): int
    {
        $i = 0;
        foreach ($this->items as $item) {
            if (isset($item)) {
                $i++;
            }
        }
        return $i;
    }

    public function count(): int
    {
        foreach ($this->items as $item) {
            $count += $item->getQuantity();
        }
        return $count;
    }

    public function clear(): void
    {
        $this->items = [];
    }
}
