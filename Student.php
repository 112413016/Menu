<?php

$name = $_POST["name"];
$age = $_POST["age"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$gender = $_POST["gender"];

// Validation
if (empty($name) || empty($age) || empty($email) || empty($phone) || empty($gender)) {
    echo "All fields are required.";
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid Email Address.";
}
elseif (!preg_match("/^[0-9]{10}$/", $phone)) {
    echo "Phone number must contain exactly 10 digits.";
}
else {
    echo "<h2>Student Details</h2>";
    echo "Name: $name <br>";
    echo "Age: $age <br>";
    echo "Email: $email <br>";
    echo "Phone: $phone <br>";
    echo "Gender: $gender <br><br>";
    echo "<b>Form Submitted Successfully!</b>";
}

?>
