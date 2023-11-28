<?php
include 'connection.php'; // Include the database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $order_id = $_POST['order_id'];
    $customer_name = $_POST['customer_name'];
    $item_name = $_POST['item_name'];
    $quantity = $_POST['quantity'];
    $timestamp = $_POST['timestamp'];

    // Insert data into the 'orders' table
    $sql = "INSERT INTO orders (order_id, customer_name, item_name, quantity, order_date) 
            VALUES ('$order_id', '$customer_name', '$item_name', '$quantity', '$timestamp')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Order placed successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
