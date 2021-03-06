<?php
declare(strict_types=1);
$products = [
    [
        'item_number' => 12553,
        'description' => 'Strawberries',
        'size' => '2 lb',
        'shelf' => 5,
        'aisle' => 2,
        'amount' => 6,
        'price' => 3.29
    ],
    [
        'item_number' => 12554,
        'description' => 'Tomatoes',
        'size' => '1 lb',
        'shelf' => 9,
        'aisle' => 13,
        'amount' => 8,
        'price' => 1.91
    ],
    [
        'item_number' => 12555,
        'description' => 'T-Bone Steak',
        'size' => '2 lb',
        'shelf' => 4,
        'aisle' => 10,
        'amount' => 24,
        'price' => 31.78
    ],
    [
        'item_number' => 12556,
        'description' => 'Cheerios',
        'size' => 'Family Size',
        'shelf' => 5,
        'aisle' => 2,
        'amount' => 10,
        'price' => 4.19
    ],
    [
        'item_number' => 12557,
        'description' => 'Milk',
        'size' => 'Gallon',
        'shelf' => 3,
        'aisle' => 5,
        'amount' => 17,
        'price' =>  3.10
    ],
    [
        'item_number' => 12558,
        'description' => 'Fruit Loops',
        'size' => 'Medium Box',
        'shelf' => 6,
        'aisle' => 2,
        'amount' => 9,
        'price' =>  4.99
    ],
    [
        'item_number' => 12559,
        'description' => 'Avocados',
        'size' => '1 lb',
        'shelf' => 8,
        'aisle' => 13,
        'amount' => 15,
        'price' =>  2.00
    ]
];

//assignments
$headers = ['Item Number', 'Description', 'Size','Shelf','Aisle','Amount','Price'];

$inventory = create_inventory($products);

$table = make_tbl($inventory, $headers);

//functions
function make_tbl(array $inventory, array $header): string
{
    $table = "<table>";

    $table .= create_table_header($header);
    $table .= create_table_body($inventory);

    $table .= "</table>";

    return $table;
}

function create_table_header(array $header_values): string
{
    $header = '<thead><tr>';

    foreach ($header_values as $value) {
        $header .= '<th>' . $value . '</th>';
    }

    $header .= '</tr></thead>';

    return $header;
}

function create_table_body(array $inventory): string
{
    $body = '<tbody>';

    foreach ($inventory as $product) {
        $body .= create_row($product);
    }

    $body .= '</tbody>';

    return $body;
}

function create_row(array $product): string
{
    $row = "<tr>";
    foreach ($product as $key => $product_attribute) {
        if($key == 'price') {
            $row .= "<td>$" . number_format($product_attribute, 2) . "</td>";
        } else {
            $row .= "<td>$product_attribute</td>";
        }
    }
    $row .= "</tr>";

    return $row;
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
function is_valid(array $product): bool
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
<?= $table ?>

</body>
</html>