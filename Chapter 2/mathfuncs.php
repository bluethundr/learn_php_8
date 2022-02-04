<?php /** @noinspection ALL */
declare(strict_types=1);

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
    try {
        return $first_value / $second_value;
    }
    catch(zeroException $e)
    { print "Don’t try to divide by zero!"; }
    catch(Throwable $t)
    { print $t->getMessage(); }
}
