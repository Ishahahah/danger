<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Get form data
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Simulate user registration (in a real application, this might involve database operations)
        // For simplicity, storing in cookies here
        setcookie('username', $username, time() + 3600); // Cookie expires in 1 hour

        echo "Registration successful! Go back to <a href='login.php'>login</a>.";
    } else {
        echo "Please fill out all fields!";
    }
}
?>

<!-- Registration form -->
<form action="register.php" method="POST">
    <input type="text" name="username" placeholder="Username"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="submit" value="Register">
</form>
