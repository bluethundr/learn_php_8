<?php
declare(strict_types=1);
include 'create_inventory.php';
include 'is_valid.php';
include 'make_tbl.php';
include  'products.php';
$headers = ['Item Number', 'Description', 'Size','Shelf','Aisle','Amount','Price'];

$inventory = create_inventory($products);

$table = make_tbl($inventory, $headers);


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