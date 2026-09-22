<?php

// Database details
$servername = "localhost";
$username = "root";
$password = "";
$database = "food_db";

// Connect to database
$conn = new mysqli(
    $servername,
    $username,
    $password,
    $database
);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from HTML form
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$cake_id = $_POST["cake_id"];
$quantity = $_POST["quantity"];
$delivery_date = $_POST["delivery_date"];
$order_type = $_POST["order_type"];
$message = $_POST["message"];
$address = $_POST["address"];

// Insert order into database
$sql = "INSERT INTO orders
(name, phone, email, cake_id, quantity, delivery_date, order_type, message, address)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
    "ssssissss",
    $name,
    $phone,
    $email,
    $cake_id,
    $quantity,
    $delivery_date,
    $order_type,
    $message,
    $address
);

// Check whether order was saved
if ($stmt->execute()) {

    echo "<h1>🎉 Order Placed Successfully!</h1>";

    echo "<p>Thank you for ordering from Sweets Crumbs.</p>";

    echo "<p>Your order has been stored in the database.</p>";

    echo "<a href='sweets1.html'>🏠 Back to Home</a>";

} else {

    echo "Error: " . $stmt->error;

}

// Close connection
$stmt->close();
$conn->close();

?>
