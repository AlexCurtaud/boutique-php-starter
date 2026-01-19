<?php

class User
{
    /** @var Address[] */
    private array $addresses = [];

    public function __construct(
        private string $name,
        private string $email,
        private DateTime $inscriptionDate = new DateTime("now", new DateTimeZone("Europe/Paris"))
    ) {}
    // Création d'addresses, et insertion de ces adresses dans le tableau d'adresse
    public function addAddress($street, $city, $postCode, $country)
    {
        if (empty($this->addresses)) {
            $this->addresses[0] = new Address($street, $city, $postCode, $country);
        } else {
            $this->addresses[count($this->addresses)] = new Address($street, $city, $postCode, $country);
        }
        echo "address added <br>";
    }

    public function getAddresses()
    {
        foreach ($this->addresses as $address) {
            echo $address->display() . '<br>';
        }
        var_dump(count($this->addresses));
    }

    public function getDefaultAddress()
    {
        echo $this->addresses[0]->display();
    }
}
