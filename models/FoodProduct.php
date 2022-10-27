<?php

require_once __DIR__ . '/Product.php';

class FoodProduct extends Product{
    public $category = 'Food';
    
    public $expiry_date = date('Y-M-D');
    public $type = 'umido'; // umido | secco
    public $weight = 0;
    public $ingredients = [];
    public $forPetWithWeight = 0;

}

?>