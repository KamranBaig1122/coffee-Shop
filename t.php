<?php
$tableNumber = isset($_POST['tableNumber']) ? $_POST['tableNumber'] : '';
$orderData = isset($_POST['orderData']) ? $_POST['orderData'] : '';

// Process the order data
$orderDataArray = json_decode($orderData, true);

// Print the received data
echo "Order received for Table Number: " . $tableNumber . "<br>";

// Connect to the database
$conn = new mysqli("localhost", "root", "", "coffee");

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Loop through each order item
foreach ($orderDataArray as $orderItem) {
    $teaName = $orderItem['teaName'];
    $quantity = $orderItem['quantity'];
    $price = $orderItem['price'];
    $total = $orderItem['total'];

    // Insert the order item into the database
    $query = "INSERT INTO `order` (tableNo, name, price, quantity, total) 
              VALUES ('$tableNumber', '$teaName', '$price', '$quantity', '$total')";

    // Execute the query
    if ($conn->query($query) === TRUE) {
        echo "Order item inserted successfully.<br>";
    } else {
        echo "Failed to insert order item: " . $conn->error . "<br>";
    }

    // Perform operations with the individual elements
    // For example, you can echo them or store them in a database
    echo "Tea Name: " . $teaName . "<br>";
    echo "Quantity: " . $quantity . "<br>";
    echo "Price: " . $price . "<br>";
    echo "Total: " . $total . "<br>";
}

// Close the database connection
$conn->close();
?>
