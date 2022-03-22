<?php
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