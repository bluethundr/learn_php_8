<table>
    <tr>
        <td>Beds</td>
        <td>Baths</td>
        <td>Address</td>
    </tr>

    <?  $address_array = [
        ['4', '2', '169 Wenona Drive']
    ]; foreach ($address_array as $row) : ?>

        <tr>
            <td><? echo $row[0]; ?></td>
            <td><? echo $row[1]; ?></td>
            <td><? echo $row[2]; ?></td>
        </tr>
    <? endforeach; ?>
</table>