<?php

class A {

    public function printName($basket)
    {
        $name = '';
        foreach ($basket as $product) {
            $name .= $product['name'];
            $name .= ' , wartość pozycji ' . $product['quantity'] * $product['price'] . '<br>';
        }
		echo $name;
    }
}

$objA = new A();

$basket = [
    ['productId' => 763, 'quantity' => 1, 'name' => 'Product 1' , 'price' => 1.2],
    ['productId' => 31238, 'quantity' => 2, 'name' => 'Product 2', 'price' => 3],
    ['productId' => 4523, 'quantity' => 1, 'name' => 'Product 3', 'price' => 5],
    ['productId' => 19879, 'quantity' => 41, 'name' => 'Product 4',  'price' => 0.19],
];

var_Dump($basket);
$objA->printName($basket);

