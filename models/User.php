<?php

class User{
    public $email;
    public $address;


    public $creditCardNumber;
    public $creditCardExpiryDate;
    public $creditCardCVV;

    public $cart = [];

    public function addProduct($product){
        $this->cart[] = $product;
    }

    public function checkOut(){
        $totalPrice = 0;
        $totalVat = 0;

        foreach($this->products as $product){
            $totalPrice += $product->$price;
            $totalVat += ($product->$price * $product->vat / 100);
        }

        return [
            "total" => $totalPrice,
            "vat" => $totalVat,
            "granTotal" => $totalPrice + $totalVat
        ];
    }
}

?>