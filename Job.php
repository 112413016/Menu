<?php

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$address = $_POST['address'];

$skills = "";
if(isset($_POST['skills']))
{
    $skills = implode(", ", $_POST['skills']);
}

if($username=="admin" && $password=="1234")
{
    echo "<h2>Login Successful</h2>";
    echo "Employee Name: $name <br>";
    echo "Username: $username <br>";
    echo "Gender: $gender <br>";
    echo "Skills: $skills <br>";
    echo "Address: $address <br>";
}
else
{
    echo "<h2>Login Failed</h2>";
    echo "Invalid Username or Password";
}

?>
