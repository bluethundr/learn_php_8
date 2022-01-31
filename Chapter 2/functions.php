<?php

function display_hello($value) {
    print $value;
}


display_hello("Hello world!");
echo nl2br("\n");
function display_names($first_name, $last_name = "none") {
    print "Your first name is $first_name";
    if($last_name != "none") {
        print " and your last name is $last_name.";
    }
}
echo nl2br("\n");
display_names("James");
echo nl2br("\n");
display_names("Jackie", "Jones");
