<?php

class Car
{
    public string $brand;
    public string $model;
    public string $year;

    public function getAge()
    {
        return date("Y") - $this->year;
    }
    public function display()
    {
        return $this->brand . " " . $this->model . " (" . $this->year . ")";
    }
}

$car1 = new Car();
$car1->brand = "Audi";
$car1->model = "A6";
$car1->year = "2005";

$car2 = new Car();
$car2->brand = "BMW";
$car2->model = "M3";
$car2->year = "2012";

$car3 = new Car();
$car3->brand = "Peugeot";
$car3->model = "206";
$car3->year = "2003";


echo $car1->getAge();
echo '<br>';
echo $car1->display();
echo '<br>';
echo '<br>';
echo $car2->getAge();
echo '<br>';
echo $car2->display();
echo '<br>';
echo '<br>';
echo $car3->getAge();
echo '<br>';
echo $car3->display();
