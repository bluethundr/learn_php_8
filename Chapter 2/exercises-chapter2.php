<?php

echo nl2br("\n");
echo "<h1>Fun with color</h1>";
print "Selecting a color: ";
/** @var STRING $color */
$color = "green";

if ($color == "green") {
    echo nl2br("I love the earth.\n");
} elseif ($color == "blue") {
    echo nl2br("The sky is beautiful.\n");
} elseif ($color == "red" || $color == "orange"){
    echo nl2br("I love sunsets.\n");
}
else {
    echo nl2br("$color is my favorite color\n");
}

echo nl2br("\n");

$number1 = 40;
$number2 = 20;
echo nl2br("Is $number1 divided by $number2 odd or even.\n");
$sum = $number1 / $number2;
if ($sum % 2 == 0) {
    echo nl2br("$number1 divided by $number2 are even.\n");
} else {
    echo nl2br("$number1 divided by $number2 is odd.\n");
}



