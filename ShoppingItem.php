<?php

class ShoppingItem {
    public string $name;
    public float $price;
    public int $amount;
    public float $taxRate;
    public function __construct(string $name, float $price, int $amount, float $taxRate)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
        $this->taxRate = $taxRate;
    }

    public function tax(): float
    {
        return $this->totalPrice() * $this->taxRate;
    }

    public function totalPrice(): float
    {
        return $this->price * $this->amount;
    }
}
