<?php declare(strict_types=1);

$enrolled = [
        [
            'student_id'=>'STID001',
            'student_name'=>'Tim',
            'student_address'=>'960 Fairview Dr',
            'student_town'=>'Toms River',
            'student_state'=>'NJ',
            'student_zip'=> '08753'
        ],
        [
            'student_id'=>'STID002',
            'student_name'=>'Barry',
            'student_address'=>'1013 Mica Ct',
            'student_town'=>'Toms River',
            'student_zip'=>'08753',
            'student_age'=>24
        ],
        [
            'student_id'=>'STID003',
            'student_name'=>'Tom',
            'student_address'=>'946 Mica Ct',
            'student_town'=>'Toms River',
            'student_zip'=>'08753',
            'student_age'=>22
        ],
        [
            'student_id'=>'STID004',
            'student_name'=>'Petyr',
            'student_address'=>'1072 Mica Ct',
            'student_town'=> 'Barnegat',
            'student_age'=>null
        ]

];

function create_students(array $enrolled): array {
    $students = [];
    foreach ($enrolled as $index => $student_info) {
        try {
            if (is_valid($student_info)) {
                $students[$index] = [];
                foreach ($student_info as $key => $value) {
                    $students[$index][$key] = $value;
                }
            }
        } catch (InvalidArgumentException $e) {
            echo $e->getMessage();
        }
    }
        ?><br><?php
    return $students;
}

function is_valid(array $student_info): bool {
    foreach ($student_info as $value) {
        if (!is_int($value) && !is_string($value)){
            throw new InvalidArgumentException("The student value is neither an integer or a string value.");
            ?><br><br><?php
        }
    }
    return true;
}

function print_reports(array $students): void {
    foreach($students as $student){
        foreach($student as $key => $value) {
            echo "$key = $value";
            ?><br><?php
        }
        ?>***<br><?php
    }

}

$students = create_students($enrolled);
print_reports($students);
