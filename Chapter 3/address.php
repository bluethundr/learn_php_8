
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
?>

<table>
    <tr>
        <td>Beds</td>
        <td>Baths</td>
        <td>Address</td>
    </tr>

    <?php
        $address_array = [
            ['4', '2', '169 Wenona Drive']
    ];
    ?>
    <?php foreach ($address_array as $row) : ?>

        <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

