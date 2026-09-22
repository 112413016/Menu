<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve order details
$sql = "SELECT * FROM orders";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Details</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff5f5;
            padding: 30px;
        }

        h1 {
            text-align: center;
            color: #8b4513;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        th, td {
            border: 1px solid #999;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f3c6c6;
        }

        tr:nth-child(even) {
            background-color: #fff0f0;
        }
    </style>
</head>

<body>

<h1>Customer Orders</h1>

<table>

    <tr>
        <th>Name</th>
        <th>Email ID</th>
        <th>KK ID</th>
        <th>Quantity</th>
        <th>Delivery Date</th>
        <th>Order Type</th>
        <th>Special Message</th>
        <th>Address</th>
    </tr>

<?php

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        echo "<tr>";

        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["cake_id"] . "</td>";
        echo "<td>" . $row["quantity"] . "</td>";
        echo "<td>" . $row["delivery_date"] . "</td>";
        echo "<td>" . $row["order_type"] . "</td>";
        echo "<td>" . $row["special_message"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";

        echo "</tr>";
    }

} else {

    echo "<tr>";
    echo "<td colspan='8'>No orders found</td>";
    echo "</tr>";
}

$conn->close();

?>

</table>

</body>
</html>
