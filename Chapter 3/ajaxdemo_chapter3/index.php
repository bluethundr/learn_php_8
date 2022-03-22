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


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<!--suppress HtmlRequiredLangAttribute -->
<html>
<head> <title>PHP Ajax Demo</title>
<link href="ajaxdemo.css" rel="stylesheet">
    <meta content="this is some meta content">
<link href="ajaxdemomobile.css" rel="stylesheet" media="only screen and (max-device-width:480px)"> <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta content="this is some meta content">
<script type='text/javascript' src='Ajax_Example_JavaScript.js'></script>
</head>
<body>
<div id="wrapper">
<div id="header"> <h1>Grocery Store Demo</h1> </div>
<div id="content">
    <h2>Inventory</h2>
    <?= $table ?>
    </div> </div> <!-- end of content -->
<div id="footer">Copyright &copy; 2020 Steve Prettyman
</div><!-- end of footer -->
</div> <!-- end of wrapper -->
</body>
</html>