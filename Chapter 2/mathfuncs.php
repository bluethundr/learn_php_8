<?php

    echo "<h2>Math functions</h2>";
    echo "<p>Demonstrating how to include files.</p><br>";
    include_once "addtwo.php";
    $first_value = 12;
    $second_value = 14;
    print "$first_value + $second_value = " . addtwo($first_value,$second_value);