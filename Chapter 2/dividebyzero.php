<?php

$five = 5;
$zero = 0;
function divbyzero($five, $zero)
{
    if (!$five || !$zero) { throw new Exception('Division by zero.'); }
    return $five / $zero;
}

try {
    $sum = divbyzero($five, $zero);
} catch (Exception $e) {
    //print($e);
}

if (!$sum) print("There is no sum."); else {
    print("The sum of $five divided by $zero = $sum.");
}
