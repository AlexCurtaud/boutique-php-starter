<?php
class Order
{
    private string $status;

    public function __construct(
        private int $id,
        private User $user,
        private Cart $item,
        private DateTime $date = new DateTime("now", new DateTimeZone("Europe/Paris"))
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
