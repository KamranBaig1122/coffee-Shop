<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the order data and table number from the request
    $orderData = $_POST['orderData'];
    $tableNumber = $_POST['tableNumber'];

    echo $tableNumber;
    // Process the order data
    $orderData = json_decode($orderData, true);

    // You can perform any necessary operations with the order data here, such as saving it to a database, sending it via email, etc.

    // Generate a response or perform any additional tasks as needed
    $response = array(
        'status' => 'success',
        'message' => 'Order placed successfully',
        'tableNumber' => $tableNumber,
        'orderData' => $orderData
    );

    // Send the response back to the client
    echo json_encode($response);
}
?>
