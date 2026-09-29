<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Practice</title>
</head>
<body>
<h1>Welcome to PHP Practice</h1>

Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus quis dolorem doloribus sequi est corrupti optio? Vitae fugiat earum non blanditiis cum quae repudiandae magnam tempore, quis amet voluptas. Minus.
<br>

<?php
// Echo and Print
echo ("This is echo Statement");
echo "<br>";
print ("This is print Statement <br>");
echo "This Echo is without Parentheses";
echo "<br>";

echo "This is an output ", " Two Parameters using echo";
// print "This is an output ", "Two Parameters using print"; // Error: print takes one argument

echo "<br>";

$x = 5;
$y = 4;

($x < $y) ? print "$x is less than $y" : print "$x is greater than $y";
// ($x < $y) ? echo ... : echo ...; // Error: echo cannot be used in a ternary

echo "<br>";
$x = 5;
echo "This is the value of $x <br>";
echo 'This is the value of $x';
echo "<br>";

$a = 4;
$b = 5;
$c = $a + $b;

echo "Total of $a and $b = $c";
echo "<br>";
echo 'Total of $a and $b = $c';

$student_number = 200;
$name = "Omar Ali";
$single = true;
$salary = 10.5;

echo "<br>";
echo "Student Number: $student_number <br>";
echo "Student name: $name <br>";
echo "Student single: " . ($single ? "Yes" : "No") . "<br>"; // FIXED: true printed as 1
echo "Student salary: $salary <br>";

echo "Student Number: ";
var_dump($student_number);
echo "<br>";
echo "Student name: ";
var_dump($name);
echo "<br>";
echo "Student single: ";
var_dump($single);
echo "<br>";
echo "Student salary: ";
var_dump($salary);
echo "<br>";
?>
</body>
</html>
