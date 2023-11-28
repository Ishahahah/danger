<!DOCTYPE html>
<html>
<head>
    <title>Welcome Admin</title>
    <style>
    /* styles.css */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.welcome {
    text-align: center;
    margin-top: 100px;
}

h1 {
    color: #333;
}

.buttons {
    margin-top: 30px;
}

a {
    display: inline-block;
    padding: 10px 20px;
    margin: 0 10px;
    text-decoration: none;
    color: #fff;
    border-radius: 5px;
    font-size: 16px;
    transition: background-color 0.3s;
}

.display-btn {
    background-color: #3498db;
}

.add-menu-btn {
    background-color: #2ecc71;
}

a:hover {
    opacity: 0.8;
}
</style>
</head>
<body>
    <div class="welcome">
        <h1>Welcome Admin!</h1>
        <div class="buttons">
            <a href="display_orders.php" class="display-btn">Display Orders</a>
            <a href="food_items.html" class="add-menu-btn">Add Menu</a>
        </div>
    </div>
</body>
</html>
