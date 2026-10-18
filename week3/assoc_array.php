<?php

// Creating Associative Array using array() function
$student_info = array(
    "id" => 101,
    "name" => "Mohamed Abdi Ali",
    "age" => 20,
    "address" => "Hodan District",
    "status" => "single",
    "weight" => 61.5
);

echo "<pre>";
print_r($student_info);
echo "</pre>";

echo $student_info['address'];

echo "<br>";

// Creating Associative Array using manual indexing
// FIXED: start from an empty array so this really creates something new
$student = [];
$student["id"] = 102;
$student["name"] = "Amina Ali";
$student["age"] = 22;
$student["address"] = "Wadajir District";
$student["status"] = "single";
$student["weight"] = 55.5;

echo "<pre>";
print_r($student);
echo "</pre>";

foreach ($student as $value) {
    echo "$value, ";
}

echo "<br>";

foreach ($student as $key => $value) {
    echo "$key: $value <br>";
}

// Two Dimensional Array
$students_indexed = array(
    array(101, "Mohamed", 20, "single"),
    array(102, "Abdi", 30, "single"),
    array(103, "Jamac", 33, "married"),
    array(104, "Amina", 40, "single"),
    array(105, "Farah", 50, "married")
);

echo "<pre>";
print_r($students_indexed);
echo "</pre>";

echo $students_indexed[2][1]; // Displays Jamac

echo "<br>";

echo $students_indexed[3][2]; // FIXED: was [3][4]; age is index 2. Displays 40

echo "<br>";

foreach ($students_indexed as $info) {
    foreach ($info as $value) {
        echo "$value, ";
    }
    echo "<br>";
}

// Two Dimensional Associative Array
$students_assoc = array(
    array("id" => 101, "name" => "Mohamed", "age" => 20, "status" => "single"),
    array("id" => 102, "name" => "Abdi", "age" => 30, "status" => "single"),
    array("id" => 103, "name" => "Jamac", "age" => 33, "status" => "married"),
    array("id" => 104, "name" => "Amina", "age" => 40, "status" => "single"),
    array("id" => 105, "name" => "Farah", "age" => 50, "status" => "married")
);

echo "<br>";

echo $students_assoc[2]["name"]; // Displays Jamac

echo "<br>";

echo $students_assoc[3]["age"]; // Displays 40

echo "<br>";

foreach ($students_assoc as $info) {
    foreach ($info as $key => $value) {
        echo "$key : $value ";
    }
    echo "<br>";
}

?>
