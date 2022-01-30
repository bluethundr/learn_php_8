<?php

echo nl2br("\n");
echo "<h2>Chapter 2 exercises</h2>";
/** @var STRING $color */
$color = "green";
echo nl2br("Problem one.\n");
print "Selecting a color: ";
if ($color == "green") {
    echo nl2br("I love the earth.\n\n");
} elseif ($color == "blue") {
    echo nl2br("The sky is beautiful.\n\n");
} elseif ($color == "red" || $color == "orange"){
    echo nl2br("I love sunsets.\n\n");
}
else {
    echo nl2br("$color is my favorite color\n\n");
}


echo nl2br("Problem two.\n");
print "Switch statement: ";
$color = "red";
switch ($color) {
    case "green":
        echo nl2br("I love the earth.\n\n");
    break;
    case "blue":
        echo nl2br("The sky is beautiful.\n\n");
    break;
    case "red" || "orange":
        echo nl2br("I love sunsets.\n\n");
    break;
    default:
        echo nl2br("$color is my favorite color\n");
    break;
}

echo nl2br("Problem three.\n");
$number = 10;
echo nl2br("Is $number odd or even.\n");
if ($number % 2 == 0) {
    echo nl2br("$number is even.\n");
    echo "Square root of " . $number . " = " . sqrt($number) . "\n";
} else {
    echo nl2br("$number is odd.\n");
    $number_cubed = pow($number, 1/3);
    echo nl2br("$number cubed is $number_cubed.\n");
}



