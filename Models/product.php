<?php

class Product {
  public $name;
  public $price;
  public $image;
  public $category;
  public $type;


  function __construct(string $name, int $price, string $image, string $category, string $type) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
    $this->category = $category;
    $this->type = $type;
  }

  public function getPrice() {
    return $this->price . "€";
  }

}