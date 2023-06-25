<?php
$tableNumber = isset($_GET['tableNumber']) ? $_GET['tableNumber'] : '';

$conn = new mysqli("localhost", "root", "", "coffee");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM `order` WHERE tableNo = '$tableNumber'";
$result = $conn->query($query);

$orderData = array();
while ($row = $result->fetch_assoc()) {
    $orderData[] = $row;
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($orderData);
?>
