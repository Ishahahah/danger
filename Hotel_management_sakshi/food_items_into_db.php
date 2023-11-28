<?php
include 'connection.php'; // Include the database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $item_name = $_POST['item_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $sql = "INSERT INTO menu_items (item_name, description, price) VALUES ('$item_name', '$description', '$price')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New menu item added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
