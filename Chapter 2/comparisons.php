<?php /** @noinspection ALL */
echo "<div style=\"text-align: center;\"><h2>Computer fun!</h2>";
print "Is 25 equal to 36: ";
$a = 25; $b = 36;
if($a == $b){
    print "$b equals $a";
}
else {
    print "$b and $a are not equal";
}

echo nl2br("\n");
print "Is a equal to A: ";
$a = "a"; $b = "A";
if($a === $b){
    print "$b equals $a";
}
else {
    print "$b and $a are not equal";
}

echo nl2br("\n");
print "Is 25 equal to 36: ";
$a = 25; $b = 36;
if($a != $b){
    print "$b and $a are not equal";
}
else {
    print "$b and $a are equal";
}

echo nl2br("\n");
print "Is A equal to a: ";
$a = "A"; $b = "a";
if($a !== $b){
    print "$b and $a are not equal";
}
else {
    print "$b and $a are equal";
}

echo nl2br("\n");
print "Is 25.1 equal to 36: ";
$a = 25.1; $b = 36;
if($a < $b){
    print "$a is less than $b";
}
else {
    print "$b is greater than $a";
}

echo nl2br("\n");
print "Is 36 = 36: ";
$a = 36; $b = 36;
if($a <= $b){
    print "$a is less than or equal to $b";
}
else {
    print "$b is greater than $a";
}

echo nl2br("\n");
print "Is 25 equal to 36: ";
$a = 25; $b = 36;
if($a > $b){
    print "$a is greater than $b";
}
else {
    print "$b is greater than $a";
}

echo nl2br("\n");
print "Is 36 equal or greater than 36: ";
$a = 36; $b = 36;
if($a >= $b){
    print "$a is greater than or equal to $b";
}
else {
    print "$b is greater than $a";
}

echo nl2br("\n");
$a = 36; $b = 36;
print "Is 36 equal to or greater than 36: ";
$result = $a <=> $b;

if($result === 0){
    print "Both are equal";
}
else if($result === 1){
    print "$a is greater than $b";
} else {
    print "$b is greater than $a";
}

echo nl2br("\n");
$a = 25; $b = 25; $c = 25; $d = 25;
print "Is 25 equal to itself using OR: ";
if($a == $b or $c == $d){
    print "Some or all of us are equal!";
} else {
    print "We are not equal";
}

echo nl2br("\n");
$a = 25; $b = 25; $c = 25; $d = 25;
print "Is 25 equal to itself using AND: ";
if($a == $b and $c == $d){
    print "All of us are equal!";
} else {
    print "No one is equal";
}

echo nl2br("\n");
$a = 25; $b = 25; $c = 25; $d = 25;
print "Are numbers the same using xor: ";
if($a == $b xor $c == $d){
    print "Everyone is equal!";
} else {
    print "Someone is not equal";

}

echo nl2br("\n");
$a = 25; $b = 25; $c = 25; $d = 25;
print "Are numbers the same using xor (negated): ";
if(!($a == $b xor $c == $d)){
    print "Everyone is equal!";
} else {
    print "Someone is not equal";

}

echo nl2br("\n");
$a = 36; $b = 36;
print "Are numbers the same using using the ternary operator: ";
print $a == $b?"They are equal":"They are not equal";

