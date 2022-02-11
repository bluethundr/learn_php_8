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

$inventory = array(
    ["item_number" =>$item1_number,
        "description" => $item1_description,
        "size" => $item1_size,
        "aisle" => $item1_aisle,
        "amount" => $item1_amount,
        "price" => $item1_price = "$5.99"],
    ["item_number" =>$item2_number,
        "description" => $item2_description ,
        "size" => $item2_size,
        "aisle" => $item2_aisle,
        "amount" => $item2_amount,
        "price" => $item2_price],
);


function create_inventory_array($items1_array,$items2_array)
{
    $items_arrays = array($items1_array, $items2_array);
    $all_items = array();
    foreach ($items_arrays as $items_list) {
        foreach ($items_list as $item) {
            if (!is_int($item) || !is_string($item)) {
                $all_items[$item] = $item;
            }
        }

    }
    print_r($all_items);
    ?><br><?php
}

create_inventory_array($items1_array,$items2_array);

