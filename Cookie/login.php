<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Get form data
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Simulate user authentication (in a real application, this might involve database operations)
        // For simplicity, let's assume it's matching a hardcoded username and password
        if ($username === 'user' && $password === 'pass') {
            setcookie('username', $username, time() + 3600); // Cookie expires in 1 hour
            echo "Login successful! Welcome, $username.";
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "Please fill out all fields!";
    }
}
?>

<!-- Login form -->
<form action="login.php" method="POST">
    <input type="text" name="username" placeholder="Username"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="submit" value="Login">
</form>
