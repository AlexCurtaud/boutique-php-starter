<?php

class Category
{
    public function __construct(
        public int $id,
        public string $nom,
        public string $description
    ) {}

    public function getSlug()
    {
        echo strtolower($this->nom);
        echo str_replace(' ', '-', $this->description);
    }
}

$cat1 = new Category(1, 'Small', 'A tiny item, useful everywhere');
$cat2 = new Category(2, 'Medium', 'A standard size item, average');
$cat3 = new Category(3, 'Big', "A huge item, we don't know where you willl store it!");

$cat1->getSlug();
echo '<br>';
$cat2->getSlug();
echo '<br>';
$cat3->getSlug();
