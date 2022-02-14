<?php declare(strict_types=1);

// create item1 variables
$item1_number = 10005678;
$item1_description = "Tophat";
$item1_size = "small";
$item1_shelf = 5;
$item1_aisle = 12;
$item1_quantity = 10;
$item1_price = "$5.99";

// create item2 variables
$item2_number = 10005662;
$item2_description = "T-shirt";
$item2_size = "large";
$item2_shelf = 9;
$item2_aisle = 13;
$item2_quantity = 15;
$item2_price = "$2.99";

// create item3 variables
$item3_number = 10005342;
$item3_description = "Shorts";
$item3_size = "large";
$item3_shelf = 4;
$item3_aisle = 13;
$item3_quantity = 24;
$item3_price = "$9.99";

// create item5 variables
$item4_number = 10005556;
$item4_description = "Pants";
$item4_size = null;
$item4_shelf = null;
$item4_aisle = 10;
$item4_quantity = 30;
$item4_price = null;

// crate array fields
$item_fields = array("Item Number", "Item Description", "Item Size", "Item Shelf", "Item Aisle","Item Quantity","Item Price");

// create items1 and items2 arrays
$items1= array($item_fields[0]=>$item1_number,$item_fields[1]=>$item1_description,$item_fields[2]=>$item1_size,$item_fields[3]=>$item1_shelf,$item_fields[4]=>$item1_aisle,$item_fields[5]=>$item1_quantity,$item_fields[6]=>$item1_price);
$items2 = array($item_fields[0]=>$item2_number,$item_fields[1]=>$item2_description,$item_fields[2]=>$item2_size,$item_fields[3]=>$item2_shelf,$item_fields[4]=>$item2_aisle,$item_fields[5]=>$item2_quantity,$item_fields[6]=>$item2_price);
$items3 = array($item_fields[0]=>$item3_number,$item_fields[1]=>$item3_description,$item_fields[2]=>$item3_size,$item_fields[3]=>$item3_shelf,$item_fields[4]=>$item3_aisle,$item_fields[5]=>$item3_quantity,$item_fields[6]=>$item3_price);
$items4 = array($item_fields[0]=>$item4_number,$item_fields[1]=>$item4_description,$item_fields[2]=>$item4_size,$item_fields[3]=>$item4_shelf,$item_fields[4]=>$item4_aisle,$item_fields[5]=>$item4_quantity,$item_fields[6]=>$item4_price);

// create inventory function creates the inventory array if the values passed to it are either integer or string
function create_inventory(array $items1,array $items2, array $items3, array $items4) : array
{
    $items = array($items1, $items2, $items3, $items4);
    $inventory = array();
    foreach ($items as $items_list) foreach ($items_list as $key => $item) {
        if (is_int($item) || is_string($item)) {
            array_push($inventory, $item);
            echo "$key : $item";?><br><?php
        }
    }
    //print_r($inventory);
    return $inventory;

}

// calls the create inventory function and assigns it to the inventory array variable
$inventory = create_inventory($items1,$items2, $items3,$items4);

// prints the contents of the inventory array
foreach ($inventory as $key => $value) {
    print "$key : $value";?><br><?php }