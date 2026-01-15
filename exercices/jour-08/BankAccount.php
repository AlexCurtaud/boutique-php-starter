<?php

class Bank
{
    public function __construct(
        private int $balance
    ) {}

    public function deposit($amount)
    {
        $this->balance = $this->balance + $amount;
        return $this->balance;
    }

    public function withdraw($amount)
    {
        if ($amount < $this->balance) {
            $this->balance = $this->balance - $amount;
            return $this->balance;
        }
        echo "Not enough fund";
    }

    public function balance()
    {
        echo $this->balance;
    }
}

$compteAlex = new Bank(100);

$compteAlex->balance();
$compteAlex->withdraw(50);
$compteAlex->balance();
$compteAlex->withdraw(150);
$compteAlex->deposit(1500);
$compteAlex->balance();
