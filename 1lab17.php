<?php
$student=[
    "Smriti"=> 90,
    "Hari"=> 85,
    "Ram"=> 75,
];
$totalGrades =0;
foreach($student as $std=>$grade){
    $totalGrades += $grade;

};
$averagegrade=$totalGrades/count($student);
echo "The average grade of the student is :".$averagegrade;



?>