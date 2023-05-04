<?php

class Product {
  public $name;
  public $price;
  public $image;
  public $category;


  function __construct(string $name, int $price, string $image, string $category) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
    $this->category = $category;
  }

}