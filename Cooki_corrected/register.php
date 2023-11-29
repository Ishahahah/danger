<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password (You should use stronger encryption methods in production)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Store user data in a cookie
    setcookie('username', $username, time() + 3600); // Cookie valid for 1 hour

    // You might want to save the hashed password in a more secure place like a database
    // For this example, we'll just store it in another cookie (not recommended)
    setcookie('password', $hashed_password, time() + 3600);

    echo "Registration successful!";
}
?>
