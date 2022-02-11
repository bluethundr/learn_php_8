<?php /** @noinspection PhpArrayUsedOnlyForWriteInspection */

$item1_number = 10005678;
$item1_description = "Tophat";
$item1_size = "small";
$item1_aisle = 12;
$item1_amount = 10;
$item1_price = "$5.99";

$item2_number = 10005662;
$item2_description = "T-shirt";
$item2_size = "large";
$item2_aisle = 13;
$item2_amount = 15;
$item2_price = "$12.99";

$items1_array = array($item1_number,$item1_description,$item1_size,$item1_aisle,$item1_amount,$item1_price);
$items2_array = array($item2_number,$item2_description,$item2_size,$item2_aisle,$item2_amount,$item2_price);
function create_inventory_array($items1_array,$items2_array)
{
    $items_arrays = array($items1_array, $items2_array);
    $inventory = array();
    foreach ($items_arrays as $items_list) {
        foreach ($items_list as $item) {
            if (!is_int($item) || !is_string($item)) {
                $inventory[$item] = $item;
            }
        }

    }
    ?><br><?php
}

create_inventory_array($items1_array,$items2_array);

