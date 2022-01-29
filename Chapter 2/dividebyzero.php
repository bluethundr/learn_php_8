<?php
echo "<div style=\"text-align: center;\"><h2>Fun with math!</h2>";
echo "<p>Here we learn that dividing by zero is BAD!</p>";
$first_num = 5;
$second_num = 0;
/**
 * @throws Exception
 */
function divbyzero($first_num, $second_num)
{
    if (!$first_num || !$second_num) { throw new Exception('Division by zero.'); }
    return $first_num / $second_num;
}

try {
    $sum = divbyzero($first_num, $second_num);
} catch (Exception $e) {
    //print($e);
}

if (!$sum) print("There is no sum. You divided by zero!"); else {
    print("The sum of $first_num divided by $second_num = $sum.");
}
