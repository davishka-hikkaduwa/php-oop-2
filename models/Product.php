<?php

class Product {
    public $price = 0;
    public $vat = 22;
    public $brand;
    public $name;
    public $description = '';
    public $category;
    public $size = 'M';

    function __construct($_brand, $_name, $_price){
        $this->brand = $brand;
        $this->name = $_name;
        $this->price = $_price;
    }
}

?>