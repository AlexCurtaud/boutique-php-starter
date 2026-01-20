<?php
class Category
{
    public function __construct(
        private int $id,
        private string $name,
    ) {}

    ///////////////////// GETTER ////////////////////////////
    public function categoryDisplay()
    {
        return $this->name;
    }

    ///////////////////// SETTER ////////////////////////////
    public function getName()
    {
        return $this->name;
    }

    public function getId()
    {
        return $this->id;
    }
}
