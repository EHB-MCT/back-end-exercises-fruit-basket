<?php

class ShoppingBasket {
    public array $shoppingItems = [];
    public function __construct(array $shoppingItems)
    {
        $this->shoppingItems = $shoppingItems;
    }

    public function tax(): float
    {
        $tax = 0;
        foreach ($this->shoppingItems as $shoppingItem) {
            $tax += $shoppingItem->tax();
        }

        return $tax;
    }

    public function totalPrice(): float
    {
        $total = 0;
        foreach ($this->shoppingItems as $shoppingItem) {
            $total += $shoppingItem->totalPrice();
        }

        return $total;
    }
}