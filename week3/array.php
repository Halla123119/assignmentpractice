<?php

// Creating array using array() function
$fruits = array("Apple", "Orange", "Banana");

echo "<pre>"; // FIXED: <pre> keeps print_r / var_dump readable
print_r($fruits);
echo "</pre>";
echo $fruits[0] . " " . $fruits[1] . " " . $fruits[2];
echo "<br>";
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Creating array manual indexing (note: indexes 3 and 4 are skipped)
$cities[0] = "Mogadishu";
$cities[1] = "Hargeisa";
$cities[2] = "Kismayo";
$cities[5] = "Bosaso";

echo "<pre>";
print_r($cities);
echo "</pre>";

echo "Index of 5: ", $cities[5];

echo "<br>";

// Creating array without explicit location
$cars[] = 'Mercedes Benz'; // FIXED typo
$cars[] = 'Hilux';
$cars[] = 'BMW';
$cars[] = 'Toyota';        // FIXED typo
$cars[] = 'Nissan';
echo "<pre>";
var_dump($cars);
echo "</pre>";

// Array with different type of values
$student_list = array(
    "101",
    "Mohamed Abdi Ali",
    20,
    "single",
    161.5
);

echo "<pre>";
var_dump($student_list);
print_r($student_list);
echo "</pre>";

// Printing Array using For Loop
$size = count($fruits); // FIXED: count once, not every loop
for ($i = 0; $i < $size; $i++) {
    echo $fruits[$i];
    if ($i < $size - 1) echo ", ";
}

echo "<br>";

// Printing Array using implode (avoids the trailing comma)
echo implode(", ", $cars);

echo "<br>";

foreach ($student_list as $value) {
    echo "$value <br>";
}

echo "<br>";

// Calculating sum of Array elements
$numbers = array(26, 11, 13, -4, 14, 17, 5, 52, 7, 9, 21, 32, 2, 4, 5);

$total = 0;
foreach ($numbers as $n) {
    $total += $n;
}

echo "The Total numbers is ", $total; // same result as array_sum($numbers)

echo "<br>";

// Creating Arrays by adding the two arrays
$array1 = array(1, 2, 3, 4, 5);
$array2 = array(6, 7, 8, 9, 10);
$array3 = []; // FIXED: declared first

for ($i = 0; $i < count($array1); $i++) {
    $array3[$i] = $array1[$i] + $array2[$i];
}

echo "Array elements are:<br>";
echo implode(", ", $array3);

echo "<br><br>";

// Associative Array
$student = array( // FIXED: renamed so it does not overwrite $student_list
    "id" => 101,
    "name" => "Mohamed Abdi Ali",
    "age" => 20,
    "address" => "Hodan District",
    "status" => "single",
    "weight" => 161.5
);

echo "<pre>";
print_r($student);
echo "</pre>";

echo implode(", ", $student);

echo "<br>";

foreach ($student as $key => $value) {
    echo "$key : $value <br>";
}

?>
