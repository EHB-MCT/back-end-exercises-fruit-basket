<?php

require_once './ShoppingItem.php';

class Fruit extends ShoppingItem {
    public function __construct(string $name, float $price, int $amount)
    {
        parent::__construct($name, $price, $amount, 0.06);
    }
}