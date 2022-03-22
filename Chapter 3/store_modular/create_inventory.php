<?php

function create_inventory(array $products): array
{
    $inventory = [];
    // loop over your product array using the index to create an array if the product is valid.
    foreach ($products as $index => $product) {
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
