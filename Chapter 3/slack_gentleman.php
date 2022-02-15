<?php

declare(strict_types=1);

$products = [
    [

        "number" => 10005678,
        "description" => "Tophat",
        "size" => "small",
        "shelf" => 5,
        "aisle" => 12,
        "quantity" => 10,
        "price" => "$5.99"
    ],
    [

        "number" => 10005662,
        "description" => "T-shirt",
        "size" => "large",
        "shelf" => 9,
        "aisle" => 13,
        "quantity" => 15,
        "price" => "$2.99"
    ],
    [
        "number" => 10005342,
        "description" => "Shorts",
        "size" => "large",
        "shelf" => 4,
        "aisle" => 13,
        "quantity" => 24,
        "price" => "$9.99"
    ],
    [
        "number" => 10005556,
        "description" => "Pants",
        "size" => null,
        "shelf" => null,
        "aisle" => 20,
        "quantity" => null,
        "price" => "$24.99"
    ]

];

function createInventory(array $products): array
{
    $inventory = [];
    foreach ($products as $product) {
        if (isValid($product)) {
            $inventory[] = $product;
        }
    }

    return $inventory;
}

function isValid(array $product): bool
{
    foreach ($product as $productValue) {
        if (!is_int($productValue) && !is_string($productValue)) {
            // log, exception, print error, ...
            return false;
        }
    }

    return true;
}

$inventory = createInventory($products);
//var_dump($inventory);
// prints the contents of the inventory array
foreach ($inventory as $key => $value) {
    print "$key : $value";?><br><?php }