<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $student_name = $_POST['student_name'];
    $complaint_text = $_POST['complaint_text'];

    $query = "INSERT INTO complaints (student_name, complaint_text) VALUES ('$student_name', '$complaint_text')";
    mysqli_query($conn, $query);

    echo "Complaint submitted successfully!";
}
?>
