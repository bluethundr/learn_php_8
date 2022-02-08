<?php declare(strict_types=1);


$students = array(
      "student_id"=>"STID001",
      "student address"=>"123 Sycamore Dr",
      "student zip"=>"08753",
      "student age"=> 21
    );


function print_student_info($students)  {
    foreach ($students as $k => $v) {
        echo nl2br("$k : $v\n");
    }
}

print_student_info($students);



