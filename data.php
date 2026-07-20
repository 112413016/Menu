<?php

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$gender = $_POST['gender'] ?? '';
$address = $_POST['address'] ?? '';
$hobbies = $_POST['hobby'] ?? [];

if (!empty($name) && !empty($email) && !empty($gender)) {

    echo "<h2 style='color:green;'>Form Submitted Successfully!</h2>";

    echo "<b>Name:</b> $name <br><br>";
    echo "<b>Email:</b> $email <br><br>";
    echo "<b>Gender:</b> $gender <br><br>";

    echo "<b>Hobbies:</b> ";
    if (!empty($hobbies)) {
        echo implode(", ", $hobbies);
    } else {
        echo "None";
    }

    echo "<br><br>";

    echo "<b>Address:</b><br>$address";

} else {

    echo "<h2 style='color:red;'>Form Submission Unsuccessful!</h2>";

}
?>
