<?php declare(strict_types=1);

// create item1 variables
$item1_number = 10005678;
$item1_description = "Cabbages";
$item1_size = "small";
$item1_shelf = 5;
$item1_aisle = 12;
$item1_quantity = 10;
$item1_price = "$5.99";

// create item2 variables
$item2_number = 10005662;
$item2_description = "Milk";
$item2_size = "large";
$item2_shelf = 9;
$item2_aisle = 13;
$item2_quantity = 15;
$item2_price = "$2.99";

// crate array fields
$item_fields = array("Item Number", "Item Description", "Item Size", "Item Shelf", "Item Aisle","Item Quantity","Item Price");

// create items1 and items2 arrays
$items1= array($item_fields[0]=>$item1_number,$item_fields[1]=>$item1_description,$item_fields[2]=>$item1_size,$item_fields[3]=>$item1_shelf,$item_fields[4]=>$item1_aisle,$item_fields[5]=>$item1_quantity,$item_fields[6]=>$item1_price);
$items2 = array($item_fields[0]=>$item2_number,$item_fields[1]=>$item2_description,$item_fields[2]=>$item2_size,$item_fields[3]=>$item2_shelf,$item_fields[4]=>$item2_aisle,$item_fields[5]=>$item2_quantity,$item_fields[6]=>$item2_price);

// create inventory function creates the inventory array if the values passed to it are either integer or string
function create_inventory(array $items1,array $items2) : array
{
    $items = array($items1, $items2);
    $inventory = array();
    foreach ($items as $items_list) {
        foreach ($items_list as $key => $item) {
            if (!is_int($item) || !is_string($item)) {
                //$inventory[$item] = $item;
                array_push($inventory, $item);
                echo "$key : $item";?><br><?php
            }
        }

    }
    return $inventory;
    ?><br><?php
}

// calls the create inventory function and assigns it to the inventory array variable
$inventory = create_inventory($items1,$items2);

// prints the contents of the inventory array
foreach ($inventory as $key => $value) {
    print "$key : $value";?><br><?php }