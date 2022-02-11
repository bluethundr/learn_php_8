<?php declare(strict_types=1);

$students = array(
    array(
        "student_id"=>"STID001",
        "student_name"=>"Tim",
        "student_address"=>"960 Fairview Dr",
        "student_town"=>"Toms River",
        "student_state"=>"NJ",
        "student_zip"=> "08753",
        "student_age"=> 21),
    array(
        "student_id"=>"STID002",
        "student_name"=>"Barry",
        "student_address"=>"1013 Mica Ct",
        "student_town"=>"Toms River",
        "student_zip"=>"08753",
        "student_age"=>24
    ),
    array(
        "student_id"=>"STID003",
        "student_name"=>"Tom",
        "student_address"=>"946 Mica Ct",
        "student_town"=>"Toms River",
        "student_zip"=>"08753",
        "student_age"=>22
    )
);


/**
 * @param array $students
 * @return void
 */
function print_student_info(array $students)
{
    foreach ($students as $student_info) {
        foreach ($student_info as $k => $v) {
            try {
                if (!is_int($v) && !is_string($v)) {
                    throw new RuntimeException("wrong type for: " . $k);
                }
                echo nl2br("$k : $v\n");
            } catch
            (RuntimeException $ex) {
                echo "An error has occurred: $ex";
            }
        }
        echo nl2br("\n");
    }

}

print_student_info($students);