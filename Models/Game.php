<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../traits/Discountable.php';

class Game extends Product {

  use Discountable;

  public $description;
  public static $icon = "fa-regular fa-futbol";

  function __construct(string $name, int $price, string $image, string $category, string $type, string $description, int $discount) {
    
    parent::__construct($name, $price, $image, $category, $type);
    $this->description = $description;
    $this->discount = $discount;
  }
}
