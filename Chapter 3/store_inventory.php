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
        'aisle' => 20,
        'quantity' => null,
        'price' => '$24.99'
    ]

];

// create inventory function creates the inventory array if the values passed to it are either integer or string
function create_inventory(array $products) : array
{
    $inventory = [];
    foreach ($products as $product)
    {
       if (is_valid($product)){
           array_push($inventory, $product);
       }

    }
    //print_r($inventory);
    //print($result);
    return $inventory;
}

function is_valid(array $product) : bool
{
    //print 'In the is_valid function: ';
    foreach ($product as $key => $value) {
        if (!is_int($value) && !is_string($value)){
            print "$value is FALSE";?><br><?php
            return false;
        }
        echo "$key : $value";?><br><?php

    }
    echo nl2br("***foo***\n");
    return true;
}

// calls the create inventory function and assigns it to the inventory array variable
$inventory = create_inventory($products);

// prints the contents of the inventory array
/*
foreach ($inventory as $key => $value) {
    print "$key : $value";?><br><?php }*/