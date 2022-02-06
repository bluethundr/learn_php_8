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
    <?php endforeach ?>
</table>