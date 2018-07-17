<?php

class A {

    public function getAmount($basket)
    {
        $amount = 0;
        foreach ($basket as $product) {
            $amount += $product['quantity'] * $product['price'];
        }
		return round($amount,1);
    }
}

$objA = new A();
echo '<h1>Case 1</h1>';
$basket = [
    ['productId' => 763, 'quantity' => 1, 'name' => 'Product 1' , 'price' => 2],
    ['productId' => 31238, 'quantity' => 2, 'name' => 'Product 2', 'price' => 100],
];
$paymentAmount = 202;
var_dump('Koszyk', $basket);
var_dump('******************************************************');
var_dump('wysokość wpłaty: '. $paymentAmount);
var_dump('******************************************************');

if ($paymentAmount == $objA->getAmount($basket)) {
    echo 'wpłata pokrywa całą wartość koszyka';
} else {
    echo 'Wartość wplaty jest inna niż wartość koszyka';
}


echo '<h1>Case 2</h1>';
$basket = [
    ['productId' => 763, 'quantity' => 1, 'name' => 'Product 1' , 'price' => 1.2],
    ['productId' => 31238, 'quantity' => 2, 'name' => 'Product 2', 'price' => 3],
    ['productId' => 4523, 'quantity' => 1, 'name' => 'Product 3', 'price' => 5],
    ['productId' => 19879, 'quantity' => 100, 'name' => 'Product 4',  'price' => 272.96],
];
$paymentAmount = 27308.2;
var_dump('Koszyk', $basket);
var_dump('******************************************************');
var_dump('wysokość wpłaty: '.  $paymentAmount);
var_dump('******************************************************');

if ($paymentAmount == $objA->getAmount($basket)) {
    echo 'wpłata pokrywa całą wartość koszyka';
} else {
    echo 'Wartość wplaty jest inna niż wartość koszyka';
}

