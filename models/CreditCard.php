<?php

class CreditCard{
    public $number;
    public $expiryDate;
    public $owner
    public $CVV;

    function __construct($_number, $_expiryDate, $_owner, $_CVV){
        $this->number = $_number;
        $this->expiryDate = $_expiryDate;
        $this->owner = $_owner;
        $this->CVV = $_CVV;
    }

    public function isValid(){
        //check sulla data di scadenza
        return true;
    }

    public function pay($price){
        $success = true;
        try{
        //interrogo una API di transazioni monetarie per $price
        }catch(Exception $e){
            // è andata male
            $success = false;
        }
        return $success;
    }
}




?>