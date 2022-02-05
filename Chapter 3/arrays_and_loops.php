<?php

$class_array = array("CS122",
    "Programming Concepts 1",
    "Basic concepts of the PHP language.",
    "B123", "Dr. Abraham Excel", 50);

$class_array = array("class number" =>"CS122",
    "class name"=>"Programming Concepts 1",
    "description"=>"Basic concepts of the PHP language.",
    "room"=>"B123",
    "instructor"=>"Dr. Abraham Excel",
    "number of students"=>50);

print "For loop";
echo nl2br("\n");
for ($I=1;$I<=10;$I++){
    print "$I times";
    echo nl2br("\n");
}


$I = 1;
echo nl2br("\nWhile loop\n");
while ($I <= 10) {
    print "$I times";
    echo nl2br("\n");
    $I++;
}
echo nl2br("\nUse print_r to print an array:\n");
$colors1 = array("red","green");
$colors2 = array("blue","yellow");
$result = array_merge($colors1, $colors2);
print_r($result);
echo nl2br("\nUse spread operator to merge two arrays together:\n");
$fords = ['falcon','mustang'];
$cars = ['civic','smart',...$fords, 'tuscon'];
var_dump($cars);

