<?php

require_once __DIR__ . '/User.php';

class RegisteredUser extends User{
    public $name;
    public $surname;
    public $password;
    public $profileImage;

    private $discount = 20;

    public function checkOut(){
        $totalCartPrice = parent::checkOut();
        $discount = $this->getDiscount();

        return [
            "total" => $totalCartPrice['total'] * $discount,
            "vat" => $totalCartPrice['vat'] * $discount,
            "granTotal" => $totalCartPrice['granTotal'] * $discount
        ];
    }

    private function getDiscount(){
        return (100 - $this->discount) / 100;
    }
}

?>