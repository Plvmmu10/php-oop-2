<?php

class Category extends Product
{
    public $animal;


    public function __construct(string $name, string $type, string $image, string $price, string $animal)
    {
        parent::__construct($name, $type, $image, $price);
        $this->animal = $animal;
    }

}