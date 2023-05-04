<?php

class Food extends Product {

    public $description;

    function __construct(string $name, int $price, string $image, string $category, string $description) {

        parent::__construct($name, $price, $image, $category);

        $this->description = $description;
    }
}