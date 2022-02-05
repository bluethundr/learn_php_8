
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
echo nl2br("\n");
echo "<table>";
foreach($address_associative_array as $key=>$row) {
    print "$key: $row";
    echo "<br>";

}
echo "</table>";


