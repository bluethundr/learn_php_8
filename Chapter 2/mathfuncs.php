<?php /** @noinspection ALL */
declare(strict_types=1);

function callmathfunc(int | float $first_value, int | float $second_value, $symbol)
{
    switch ($symbol) {
        case '+':
            print "$first_value + $second_value = " . addtwo($first_value, $second_value);
        break;
        case '-':
            print "$first_value - $second_value = " . subtracttwo($first_value, $second_value);
        break;
        case '*':
            print "$first_value * $second_value = " . multiplytwo($first_value, $second_value);
        break;
        case '/':
            print "$first_value - $second_value = " . dividetwo($first_value, $second_value);
        break;
        default:
            echo nl2br("$symbol is not a valid math function.\n");
        break;
    }
}

function addtwo(int | float $first_value, int | float $second_value) : int | float {
    return $first_value + $second_value;
}

function subtracttwo(int | float $first_value, int | float $second_value) : int | float {
    return $first_value - $second_value;
}

function multiplytwo(int | float $first_value, int | float $second_value) : int | float {
    return $first_value * $second_value;
}

function dividetwo(int | float $first_value, int | float $second_value) : int | float {
    return $first_value / $second_value;
}