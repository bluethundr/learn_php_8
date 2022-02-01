<?php declare(strict_types=1);
echo nl2br("Say hello world! with a function.\n");
function display_hello($value) {
    print $value;
}

display_hello("Hello world");

echo nl2br("\n\n");
function display_names($first_name, $last_name = "none") {
    print "Your first name is $first_name";
    if($last_name != "none") {
        print " and your last name is $last_name.";
    }
}
echo nl2br("Display first name with a function:\n");
display_names("James");
echo nl2br("\n\nDisplay full name with a function:\n");
display_names("Jackie", "Jones");

echo nl2br("\n\nAdd two numbers with a function:\n");
$first_value = 12;
$second_value = 14;
function addtwo($first_value, $second_value){
    $result = $first_value + $second_value;
    return $result;
}
print "$first_value plus $second_value = " . addtwo($first_value,$second_value);

echo nl2br("\n\nAdd two numbers with a function and enforce integer type:\n");
$first_value = 36;
$second_value = 72;
function additiontwo(int $first_value, int $second_value):
int{
    $result = $first_value + $second_value;
    return $result;
}
print "$first_value plus $second_value = " . additiontwo($first_value,$second_value);