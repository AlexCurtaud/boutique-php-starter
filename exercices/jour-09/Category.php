<?php
class Category
{
    public function __construct(
        private int $id,
        private string $name,
        private string $description
    ) {}
    public function categoryDisplay()
    {
        return $this->name;
    }
}