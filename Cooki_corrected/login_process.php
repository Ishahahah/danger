<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Retrieve stored user data from cookies
    $stored_username = $_COOKIE['username'];
    $stored_password = $_COOKIE['password'];

    // Verify if the entered credentials match the stored data
    if ($username == $stored_username && password_verify($password, $stored_password)) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password";
    }
}
?>
