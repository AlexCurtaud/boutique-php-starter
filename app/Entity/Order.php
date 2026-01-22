<?php

class Order
{
    public function __construct(
        private Cart $item
    ) {}

    // GETTER
    public function getTotal()
    {
        return $this->item->getTotalCart();
    }

    public function getItemCount()
    {
        return $this->item->count();
    }

    // SETTER
    public function setStatus() {}
}
