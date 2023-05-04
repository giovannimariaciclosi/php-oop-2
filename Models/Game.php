<?php

class Game extends Product {

    public $description;
    public static $icon = "fa-regular fa-futbol";

    function __construct(string $name, int $price, string $image, string $category, string $description) {

        parent::__construct($name, $price, $image, $category);

        $this->description = $description;
    }
}
