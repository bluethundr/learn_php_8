<?php

    echo "<h2>Math functions</h2>";
    echo "<p>Demonstrating how to include files.</p><br>";
    include "call_functions.php";
    $symbol = '+';
    $first_value = 33;
    $second_value = 68;
    callmathfunc($first_value, $second_value, $symbol);
    echo  nl2br ("\n");

    $symbol = '-';
    $first_value = 44;
    $second_value = 36;
    callmathfunc($first_value, $second_value, $symbol);
    echo  nl2br ("\n");

    $symbol = '*';
    $first_value = 4;
    $second_value = 28;
    callmathfunc($first_value, $second_value, $symbol);
    echo  nl2br ("\n");

    $symbol = '/';
    $first_value = 88;
    $second_value = 4;
    callmathfunc($first_value, $second_value, $symbol);
    echo  nl2br ("\n");

    $symbol = '&';
    $first_value = 99;
    $second_value = 72;
    callmathfunc($first_value, $second_value, $symbol);

