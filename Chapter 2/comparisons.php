<?php
echo "<div style=\"text-align: center;\"><h2>Computer fun!</h2>";
$a = 25; $b = 36;
if($a == $b){
    print "$b equals $a";
}
else {
    print "$b and $a are not equal";
}
echo nl2br("\n");
$a = "a"; $b = "A";
if($a === $b){
    print "$b equals $a";
}
else {
    print "$b and $a are not equal";
}
echo nl2br("\n");
$a = 25; $b = 36;
if($a != $b){
    print "$b and $a are not equal";
}
else {
    print "$b and $a are equal";
}
echo nl2br("\n");
$a = "A"; $b = "a";
if($a !== $b){
    print "$b and $a are not equal";
}
else {
    print "$b and $a are equal";
}
echo nl2br("\n");
$a = 25.1; $b = 36;
if($a < $b){
    print "$a is less than $b";
}
else {
    print "$b is greater than $a";
}
echo nl2br("\n");
$a = 36; $b = 36;
if($a <= $b){
    print "$a is less than or equal to $b";
}
else {
    print "$b is greater than $a";
}
echo nl2br("\n");
$a = 25; $b = 36;
if($a > $b){
    print "$a is greater than $b";
}
else {
    print "$b is greater than $a";
}
echo nl2br("\n");
$a = 36; $b = 36;
if($a >= $b){
    print "$a is greater than or equal to $b";
}
else {
    print "$b is greater than $a";
}
echo nl2br("\n");
$a = 36; $b = 36;

$result = $a <=> $b;

if($result === 0){
    print "Both are equal";
}
else if(result === 1){
    print "$a is greater than $b";
} else {
    print "$b is greater than $a";
}

