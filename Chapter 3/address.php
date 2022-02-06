
<?php
$address_array = array(
    "4 Bedrooms",
    "2 Bathrooms",
    "169 West Lake Shore Drive"
);

foreach ($address_array as $row) {
    echo "<td>" . $row . "<br></td>";
}

$address_associative_array = array(
    "Bedrooms"=>"4",
    "Bathrooms"=>"2",
    "Address"=>"169 West Lake Shore Drive"
);


echo "<table>";
echo"<table>";
echo "<tr>";
echo  "<td>Beds</td>";
echo  "<td>Baths</td>";
echo   "<td>Address</td>";
echo "</tr>";
echo nl2br("\n");
foreach($address_associative_array as $key=>$row) {
    print "$key: $row";
    echo "<br>";

}
echo "</table>";


