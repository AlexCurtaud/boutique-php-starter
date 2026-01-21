<?php

class User
{
    /** @var Address[] */
    private array $addresses = [];

    public function __construct(
        private string $name,
        private string $email,
        private string $password,
        private DateTime $inscriptionDate = new DateTime("now", new DateTimeZone("Europe/Paris"))
    ) {}

    ///////////////////// GETTER ////////////////////////////

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

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    ///////////////////// SETTER ////////////////////////////

    // Création d'addresses, et insertion de ces adresses dans le tableau d'adresse
    public function addAddress($street, $city, $postCode, $country)
    {
        $this->addresses[] = new Address($street, $city, $postCode, $country);
        echo "address added <br>";
    }
}
