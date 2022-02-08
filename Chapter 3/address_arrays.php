<?php
// demonstration on how to access data in an array.

$data = [
    '4',
    '2',
    '169 Wenona Drive',
];
echo 'Single Row:' . PHP_EOL;

foreach ($data as $row) {
    echo var_export($row, true) . PHP_EOL;
}

$data = [
    $data
];

echo 'An array of array:' . PHP_EOL;
foreach ($data as $row) {
    echo var_export($row, true) . PHP_EOL;
}