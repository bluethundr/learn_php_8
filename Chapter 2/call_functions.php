<?php

include "mathfuncs.php";

function callmathfunc(int | float $first_value, int | float $second_value, $symbol)
{
    switch ($symbol) {
        case '+':
            echo  nl2br ("<b>Addition</b>\n");
            print "$first_value + $second_value = " . addtwo($first_value, $second_value);
            break;
        case '-':
            echo  nl2br ("<b>Subtraction</b>\n");
            print "$first_value - $second_value = " . subtracttwo($first_value, $second_value);
            break;
        case '*':
            echo  nl2br ("<b>Multiplication</b>\n");
            print "$first_value * $second_value = " . multiplytwo($first_value, $second_value);
            break;
        case '/':
            echo  nl2br ("<b>Division</b>\n");
            print "$first_value / $second_value = " . dividetwo($first_value, $second_value);
            break;
        default:
            echo  nl2br ("<b>Invalid Character</b>\n$symbol is not a valid math function.\n");
            break;
    }
}
