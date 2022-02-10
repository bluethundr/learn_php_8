<?php

$students = array(
      "student_id"=>"STID001",
      "student_name"=>"Tim",
      "student_address"=>"960 Fairview Dr",
      "student_town"=>"Toms River",
      "student_state"=>"NJ",
      "student_zip"=> "08753",
      "student_age"=> 21
    );

function print_student_info($students)
{
    foreach ($students as $k => $v) {
        try {
            if (is_int($v) | is_string($v)) {
                echo nl2br("$k : $v\n");
            }
        }
        catch
            (Exception $ex) {
                echo "An error has occurred: $ex";
            }
    }

}

print_student_info($students);



