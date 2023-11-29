<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Available Products</h1>

        <?php
        include 'connection.php'; // Include your database connection file

        $sql = "SELECT id, name, description, price FROM agri";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product'>";
                echo "<h3>{$row['name']}</h3>";
                echo "<p>Description: {$row['description']}</p>";
                echo "<p>Price: {$row['price']}</p>";
                echo "<form method='post' action='product_details.php'>";
                echo "<input type='hidden' name='product_id' value='{$row['id']}'>";
                echo "<input type='submit' name='buy' class='buy-btn' value='Buy'>";
                echo "</form>";
                echo "</div>";
            }
        } else {
            echo "No products available.";
        }
        ?>
    </div>
</body>
</html>
