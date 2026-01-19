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
        $this->addresses[] = new Address($street, $city, $postCode, $country);
        echo "address added <br>";
    }

    public function getAddresses()
    {
        $allAdresses = [];
        foreach ($this->addresses as $address) {
            array_push($allAdresses, $address->display());
        }
        return $allAdresses;
    }

    public function getDefaultAddress()
    {
        return $this->addresses[0]->display();
    }
}
