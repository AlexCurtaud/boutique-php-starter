<?php

class Address
{
    public function __construct(
        private string $street,
        private string $city,
        private int $postCode,
        private string $country
    ) {}
    public function display()
    {
        return $this->street . ' <br>' .
            $this->city . ' <br>' .
            $this->postCode . ' <br>' .
            $this->country . ' <br>';
    }
}
