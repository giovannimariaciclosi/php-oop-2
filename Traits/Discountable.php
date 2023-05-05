<?php

trait Discountable {

  protected $discount = 0;

  public function setDiscount($discount) {
    if($discount >= 0 && $discount <= 90) {

      $this->discount = $discount;

    } else {

      throw new Exception("The discount must be between 0 and 90.");

    }
  }

  public function getDiscount() {
    return $this->discount;
  }

  public function getDiscountedPrice($discount) {

    $this->price = $this->price * (1 - $discount/100);

    return $this->price;
  }
}