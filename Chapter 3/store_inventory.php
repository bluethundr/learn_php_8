<?php declare(strict_types=1);

// create item1 variables
$item1_number = 10005678;
$item1_description = "Tophat";
$item1_size = "small";
$item1_shelf = 5;
$item1_aisle = 12;
$item1_amount = 10;
$item1_price = "$5.99";
// create item2 variables
$item2_number = 10005662;
$item2_description = "T-shirt";
$item2_size = "large";
$item2_shelf = 9;
$item2_aisle = 13;
$item2_amount = 15;
$item2_price = "$12.99";
// create items1 and items2 arrays
$items1_array = array($item1_number,$item1_description,$item1_size,$item1_shelf,$item1_aisle,$item1_amount,$item1_price);
$items2_array = array($item2_number,$item2_description,$item2_size,$item2_shelf,$item2_aisle,$item2_amount,$item2_price);
function create_inventory_array(array $items1_array, array $items2_array): array
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
    return $inventory;
}
$inventory = create_inventory_array($items1_array,$items2_array);
foreach ($inventory as $key => $value) {
    print "$key : $value";?><br><?php }