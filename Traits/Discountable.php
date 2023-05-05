<?php

trait Discountable {

  protected $discount = 0;

  // public function setDiscount($discount) {
  //   $this->discount = $discount;
  // }



  public function getDiscount() {
    return $this->discount;
  }

  public function setDiscount($discount) {
    $this->discount = $discount;
  }

  public function getDiscountedPrice($discount) {
    $this->price = $this->price * (1 - $discount/100);
    return $this->price;
  }
  
  
}