<?php

declare(strict_types=1);
$products = [
    [
        'item_number' => 15678,
        'description' => 'Tophat',
        'size' => 'small',
        'shelf' => 5,
        'aisle' => 12,
        'amount' => 10,
        'price' => 5.99
    ],
    [
        'item_number' => 15662,
        'description' => 'T-shirt',
        'size' => 'large',
        'shelf' => 9,
        'aisle' => 13,
        'amount' => 15,
        'price' => 2.99
    ],
    [
        'item_number' => 15342,
        'description' => 'Shorts',
        'size' => 'large',
        'shelf' => 4,
        'aisle' => 13,
        'amount' => 24,
        'price' => 9.99
    ],
    [
        'item_number' => 15556,
        'description' => 'Pants',
        'size' => 'Small',
        'shelf' => 5,
        'aisle' => 2,
        'amount' => 10,
        'price' => 24.99
    ],
    [
        'item_number' => 15557,
        'description' => 'Belt',
        'size' => 'Large',
        'shelf' => 3,
        'aisle' => 5,
        'amount' => 10,
        'price' => 10000.00
    ]
];

// create inventory function creates the inventory array if the values passed to it are either integer, float or string
function create_inventory(array $products): array
{
    $inventory = [];
    // loop over your product array using the index to create an array if the product is valid.
    foreach ($products as $index => $product) {
        //var_dump($index);
        if (is_valid($product)) {
            // Create an empty array when the product is valid.
            $inventory[$index] = [];
            // Loop over the product values and add them to the newly created array.
            foreach ($product as $key => $value) {
                $inventory[$index][$key] = $value;
            }
        }
    }
    return $inventory;
}

// Tests whether the $product array is valid
function is_valid(array $product) : bool
{
    foreach ($product as $key => $value) {
        if (!is_int($value) && !is_float($value) && !is_string($value)){
            return false;
        } elseif ($key == 'item_number' && !($value >=00000 && $value <=99999)) {
            return false;
        } elseif ($key == 'aisle' && !($value >=00 && $value <=15)) {
            return false;
        } elseif ($key == 'price' && ($value >=1000)) {
            return false;
        }
    }
    return true;
}

function print_reports(array $inventory) {
    foreach ($inventory as $product) {
        foreach ($product as $key => $value){
            if ($key == 'price') {
            echo "$key : \$$value";?><br><?php
            } else {
                echo "$key : $value";?><br><?php
            }
        }
        echo "******************";?><br><?php
    }
}

// calls the create inventory function and assigns it to the inventory array variable
try {
    $inventory = create_inventory($products);
} catch (Exception $exception) {
    print "Something went wrong: $exception";
}
// Prints the output to the screen
print_reports($inventory);