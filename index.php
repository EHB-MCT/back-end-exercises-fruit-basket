<?php

declare(strict_types=1);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once './Fruit.php';
require_once './LuxuryProduct.php';
require_once './ShoppingBasket.php';
require_once './ShoppingItem.php';

$apples = new Fruit('apple', 1, 6);
$bananas = new Fruit('banana', 1.5, 3);
$wine = new LuxuryProduct('wine', 10, 2);

$shoppingBasket = new ShoppingBasket([$apples, $bananas, $wine]);
var_dump('Total price: ' . $shoppingBasket->totalPrice());
echo '<br>';
var_dump('Total tax: ' . $shoppingBasket->tax());