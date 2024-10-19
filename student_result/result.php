<?php
// Assign marks for 5 subjects 
$marks_list = [75, 81, 50, 90, 65];  

// Mark range validation
function valid_marks($marks_list) {
    foreach ($marks_list as $marks) {
        if ($marks < 0 || $marks > 100) {
            echo "Mark range is invalid.<br>";
            return false;
        }
    }
    return true;
}

// Calculation of total marks, average marks, and grade
function calculate_result($marks_list) {
    $total_marks = array_sum($marks_list);
    $average_marks = $total_marks / count($marks_list);

    // Determine grade 
    switch (true) {
        case ($average_marks >= 80 && $average_marks <= 100):
            $grade = "A+";
            break;
        case ($average_marks >= 70 && $average_marks < 80):
            $grade = "A";
            break;
        case ($average_marks >= 60 && $average_marks < 70):
            $grade = "A-";
            break;
        case ($average_marks >= 50 && $average_marks < 60):
            $grade = "B";
            break;
        case ($average_marks >= 40 && $average_marks < 50):
            $grade = "C";
            break;
        case ($average_marks >= 33 && $average_marks < 40):
            $grade = "D";
            break;
        default:
            $grade = "F";
            echo "The student has failed.<br><br>";
    }

    return array($total_marks, $average_marks, $grade);
}

// output
if(valid_marks($marks_list)){
    list($total_marks, $average_marks, $grade) = calculate_result($marks_list);
        echo "Total Marks: $total_marks<br>";
        echo "Average Marks: " . number_format($average_marks, 2) . "<br>";
        echo "Grade: $grade<br>";
} else {
    echo "The student has failed.<br>";
}

