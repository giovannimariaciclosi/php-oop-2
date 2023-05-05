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

  public function getCategoryIcon() {
    if($this->category == "Dog") {
      return "<i class='fa-solid fa-dog'></i>";

    } elseif($this->category == "Cat") {
      return "<i class='fa-solid fa-cat'></i>";

    } else {
      return "<i class='fa-solid fa-circle-question'></i>";
    }
  }

}