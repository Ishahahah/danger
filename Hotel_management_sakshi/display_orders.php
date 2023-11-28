<?php
include 'connection.php'; // Include the database connection file

$sql = "SELECT * FROM orders";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Customer Orders</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Customer Orders</h2>
    <table>
        <tr>
            <th>Order ID</th>
            <th>Customer Name</th>
            <th>Item Name</th>
            <th>Quantity</th>
            <th>Order Date</th>
        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['order_id']; ?></td>
                <td><?php echo $row['customer_name']; ?></td>
                <td><?php echo $row['item_name']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
                <td><?php echo date('jS M Y', strtotime($row['order_date'])); ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
