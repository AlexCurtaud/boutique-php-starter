<?php

require_once __DIR__.'/Category.php';

class Skatepark
{
    private string $name;

    private string $description;

    private Category $category;

    private string $location;

    public function __construct(string $name, string $description, Category $category, string $location)
    {
        $this->name = $name;
        $this->description = $description;
        $this->category = $category;
        $this->location = $location;
    }

    // //////////////// GETTER //////////////////

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    // //////////////// SETTER //////////////////
    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }

    public function setCategory($category): void
    {
        $this->category = $category;
    }

    public function setLocation($location): void
    {
        $this->location = $location;
    }
}
