<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $cake = $_POST["cake"];
    $quantity = $_POST["quantity"];
    $delivery_date = $_POST["delivery_date"];
    $order_type = $_POST["order_type"];
    $message = $_POST["message"];
    $address = $_POST["address"];

    // Name validation
    if (!preg_match("/^[A-Za-z ]{3,30}$/", $name)) {
        die("Invalid name. Use only letters and spaces.");
    }

    // Phone validation
    if (!preg_match("/^[0-9]{10}$/", $phone)) {
        die("Invalid phone number. Enter exactly 10 digits.");
    }

    // Email validation
    if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[A-Za-z]{2,}$/", $email)) {
        die("Invalid email address.");
    }

    // Quantity validation
    if (!preg_match("/^[1-9][0-9]?$/", $quantity) || $quantity > 20) {
        die("Quantity must be between 1 and 20.");
    }

    // Display order details
    echo "<h1>🍰 Sweets Crumbs 🍰</h1>";
    echo "<h2>✅ Order Successfully Placed!</h2>";

    echo "<p><b>Name:</b> " . htmlspecialchars($name) . "</p>";
    echo "<p><b>Phone:</b> " . htmlspecialchars($phone) . "</p>";
    echo "<p><b>Email:</b> " . htmlspecialchars($email) . "</p>";
    echo "<p><b>Cake:</b> " . htmlspecialchars($cake) . "</p>";
    echo "<p><b>Quantity:</b> " . htmlspecialchars($quantity) . "</p>";
    echo "<p><b>Delivery Date:</b> " . htmlspecialchars($delivery_date) . "</p>";
    echo "<p><b>Order Type:</b> " . htmlspecialchars($order_type) . "</p>";
    echo "<p><b>Special Message:</b> " . htmlspecialchars($message) . "</p>";
    echo "<p><b>Address:</b> " . htmlspecialchars($address) . "</p>";

    echo "<h3>🎂 Thank you for ordering from Sweets Crumbs!</h3>";

} else {
    echo "Invalid request.";
}

?>
