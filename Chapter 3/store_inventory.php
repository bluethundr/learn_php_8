<?php

declare(strict_types=1);
$products = [
    [

        'number' => '10005678',
        'description' => 'Tophat',
        'size' => 'small',
        'shelf' => 5,
        'aisle' => 12,
        'quantity' => 10,
        'price' => '$5.99'
    ],
    [

        'number' => '10005662',
        'description' => 'T-shirt',
        'size' => 'large',
        'shelf' => 9,
        'aisle' => 13,
        'quantity' => 15,
        'price' => '$2.99'
    ],
    [
        'number' => '10005342',
        'description' => 'Shorts',
        'size' => 'large',
        'shelf' => 4,
        'aisle' => 13,
        'quantity' => 24,
        'price' => '$9.99'
    ],
    [
        'number' => '10005556',
        'description' => 'Pants',
        'size' => null,
        'shelf' => null,
        'aisle' => null,
        'quantity' => null,
        'price' => '$24.99'
    ]

];

// create inventory function creates the inventory array if the values passed to it are either integer or string
function create_inventory(array $products) : array
{
    $inventory = [];
    foreach ($products as $key => $product)
    {
       if (is_valid($product)){
           foreach ($product as $value) {
                $inventory[] = $value;
           }
       }
    }
    return $inventory;
}

// Tests whether the $product array is valid
function is_valid(array $product) : bool
{
    foreach ($product as $value) {
        if (!is_int($value) && !is_string($value)){
            return false;
        }

    }
    return true;
}

// calls the create inventory function and assigns it to the inventory array variable
$inventory = create_inventory($products);

foreach ($inventory as $key => $value) {
    echo "$key : $value";?><br><?php
}