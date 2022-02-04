<?php

    echo "<h2>Math functions</h2>";
    echo "<p>Demonstrating how to include files.</p><br>";
    $symbol = '+';
    $first_value = 44;
    $second_value = 36;
    include "mathfuncs.php";
    try {
        callmathfunc($first_value, $second_value, $symbol);
    }
    catch(Throwable $t)
    { Print $t->getMessage(); }