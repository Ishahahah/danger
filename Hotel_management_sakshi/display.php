<?php
include 'connection.php'; // Include the database connection file

$sql = "SELECT * FROM menu_items";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Restaurant Menu</title>
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
    <h2>Restaurant Menu</h2>
    <table>
        <tr>
          
            <th>Item Name</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
               
                <td><?php echo $row['item_name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['price']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
