<?php
include 'connection.php'; // Check the file name and path for your database connection

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $gender = $_POST['gender'];

    // Create the SQL query (assuming 'emp' table with 'name' and 'gender' columns)
    $sql = "INSERT INTO emp (name, gender) VALUES ('$name', '$gender')";
    
    // Run the query
    $run = mysqli_query($conn, $sql);

  
}
?>
