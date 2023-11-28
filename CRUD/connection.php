<?php
$conn = mysqli_connect("localhost", "root", "", "empdb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection successful";
}
?>
