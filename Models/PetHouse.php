<?php

class PetHouse extends Product {

    public $description;
    public static $icon = "fa-solid fa-house";

    function __construct(string $name, int $price, string $image, string $category, string $type, string $description) {
      
      parent::__construct($name, $price, $image, $category, $type);
      $this->description = $description;
    }
}
