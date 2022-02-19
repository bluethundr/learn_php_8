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
        'price' => 5.99
    ],
    [

        'number' => '10005662',
        'description' => 'T-shirt',
        'size' => 'large',
        'shelf' => 9,
        'aisle' => 13,
        'quantity' => 15,
        'price' => 2.99
    ],
    [
        'number' => '10005342',
        'description' => 'Shorts',
        'size' => 'large',
        'shelf' => 4,
        'aisle' => 13,
        'quantity' => 24,
        'price' => 9.99
    ],
    [
        'number' => '10005556',
        'description' => 'Pants',
        'size' => null,
        'shelf' => null,
        'aisle' => 20,
        'quantity' => null,
        'price' => 24.99
    ]

];

// create inventory function creates the inventory array if the values passed to it are either integer or string
function create_inventory(array $products): array
{
    $inventory = [];
    // loop over your product array using the index to create an array if the product is valid.
    foreach ($products as $product) {
        if (is_valid($product)) {
            // Create an empty array when the product is valid.
            //$inventory[$index] = [];
            // Loop over the product values and add them to the newly created array.
            foreach ($product as $key => $value) {
                $inventory[$key] = $value;
            }
        }
    }
    return $inventory;
}

// Tests whether the $product array is valid
function is_valid(array $product) : bool
{
    //print 'In the is_valid function: ';
    foreach ($product as $value) {
        if (!is_int($value) && !is_float($value) && !is_string($value)){
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