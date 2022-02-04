<?php

    echo "<h2>Math functions</h2>";
    echo "<p>Demonstrating how to include files.</p><br>";
    $first_value = 12;
    $second_value = 14;
    try {
        include "addtwo.php";
        echo nl2br("$first_value + $second_value = " . addtwo($first_value, $second_value) . "\n");
    }
    catch(zeroException $e)
    { print "Error adding: $e";
    }
    catch(Throwable $t)
    { Print $t->getMessage(); }
    try {
        print "$first_value / $second_value = " . dividetwo( 12, 14);
    }
    catch(zeroException $e)
    { print "Don’t try to divide by zero!";
    }
    catch(Throwable $t)
    { Print $t->getMessage(); }
    finally
    { echo nl2br("\n\nFun with math has concluded.\n");}
