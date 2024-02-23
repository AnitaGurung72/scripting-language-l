<?php
echo "Hello World!<br>";
$length=4;
$breadth=5;
$Area=$length * $breadth;
echo "The area of rectangle is :{$Area}<br>";
$a=3;
$b=4;
[$a,$b]=[$b,$a];
echo "The number of  a is{$a}<br>";
echo "The number of b is {$b}<br>";
$age = 25;
$Student = true;

if ($age >= 18 && $Student) {
    echo "You are a student.<br>";
} elseif ($age >= 18 && !$isStudent) {
    echo "You are not a student.<br>";
} else {
    echo "You are either under 18 or not a student.<br>";
}
$day = 4; 

switch ($day) {
    case 1:
        echo "Today is Sunday<br>";
        break;
    case 2:
        echo "Today is Monday<br>";
        break;
    case 3:
        echo "Today is Tuesday<br>";
        break;
    case 4:
        echo "Today is Wednesday<br>";
        break;
    case 5:
        echo "Today is Thrusday<br>";
        break;
    case 6:
        echo "Today is Friday<br>";
        break;
    case 7:
        echo "Today is Saturday<br>";
        break;
    default:
        echo " Please enter a number between 1 and 7.<br>";
}

$num=1;
while($num<=10){
    echo"$num<br>";
    $num=$num+1;
}
$countries=array("Nepal","India","China","Korea","Japan");
echo "List of countries are :<br> ";
for ($i = 0; $i < count($countries); $i++) {
    echo "$countries[$i]<br>";
}
$num= array ("2,3,2,4,5,6");
echo"Given number are:<br>";
foreach($num as $number){
    echo $number;
}

?>