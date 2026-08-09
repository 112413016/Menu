<?php

$name = $_POST["name"];
$age = $_POST["age"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$gender = $_POST["gender"];
$course = $_POST["course"];
$address = $_POST["address"];

/* Name validation */
if (!preg_match("/^[A-Za-z ]{3,30}$/", $name)) {
    echo "Invalid Name";
    exit;
}

/* Age validation: 18 to 30 */
if (!preg_match("/^(1[89]|2[0-9]|30)$/", $age)) {
    echo "Age must be between 18 and 30";
    exit;
}

/* Email validation */
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid Email";
    exit;
}

/* Phone validation */
if (!preg_match("/^[0-9]{10}$/", $phone)) {
    echo "Phone number must contain exactly 10 digits";
    exit;
}

/* Gender validation */
if (!isset($gender)) {
    echo "Please select Gender";
    exit;
}

/* Course validation */
if (!isset($course)) {
    echo "Please select Course";
    exit;
}

/* Address validation */
if (!isset($address)) {
    echo "Please enter Address";
    exit;
}

/* Display result */
echo "<h2>Student Registration Successful</h2>";

echo "Name: " . htmlspecialchars($name) . "<br>";
echo "Age: " . htmlspecialchars($age) . "<br>";
echo "Email: " . htmlspecialchars($email) . "<br>";
echo "Phone: " . htmlspecialchars($phone) . "<br>";
echo "Gender: " . htmlspecialchars($gender) . "<br>";
echo "Course: " . htmlspecialchars($course) . "<br>";
echo "Address: " . htmlspecialchars($address) . "<br>";

/* Hobbies */
if (isset($_POST["hobbies"])) {
    echo "Hobbies: " . implode(", ", $_POST["hobbies"]);
} else {
    echo "Hobbies: None";
}

?>
