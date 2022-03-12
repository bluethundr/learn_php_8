<?php 

$products = [
    [
        'item_number' => 15678,
        'description' => 'Cabbage',
        'size' => 'small',
        'shelf' => 5,
        'aisle' => 50,
        'amount' => 10,
        'price' => 2.99
    ],
    [
        'item_number' => 15662,
        'description' => 'Tomatoes',
        'size' => 'small',
        'shelf' => 9,
        'aisle' => 13,
        'amount' => 15,
        'price' => 2.99
    ],
    [
        'item_number' => 15342,
        'description' => 'T-Bone Steak',
        'size' => 'Large',
        'shelf' => 4,
        'aisle' => 13,
        'amount' => 24,
        'price' => 16.99
    ],
    [
        'item_number' => 15556,
        'description' => 'Cheerios',
        'size' => 'Large Box',
        'shelf' => 5,
        'aisle' => 2,
        'amount' => 10,
        'price' => 5.99
    ],
    [
        'item_number' => 15557,
        'description' => 'Milk',
        'size' => 'Gallon',
        'shelf' => 3,
        'aisle' => 5,
        'amount' => 10,
        'price' =>  2.99
    ]
];


function make_tbl($inventory)
{
    $tbl_array = []; // table tags need to be outside the loops
    $tbl_array[] = "<table>"; // table tags need to be outside of loops
    foreach($inventory as $row) { // outer loop makes the rows
        $tbl_array[] = "<tr>";  // tr tags need to be outside the inner loop
        foreach($row as $cell) { // inner loop makes the row cells
            $tbl_array[] = "<td>$cell</td>";
        }
        $tbl_array[] = "</tr>";
    }
    return implode('', $tbl_array);
}


// create inventory function creates the inventory array if the values passed to it are either integer, float or string
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

$inventory = create_inventory($products);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Store</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="navbar">
        <div class="container">
            <a class="logo" href="#">Grocery<span>Store</span></a>
        </div>
    </div> 

    <style>
        table{
            border-collapse: 1px solid #000;
            padding: 5px;
        }
        td {
            border: 1px solid #000;
            padding: 5px;
        }
    </style>
    <?= make_tbl($inventory) ?>
</body>
</html>

