<?php
include 'connection.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM emp WHERE id = $id";
    
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
        header("Location: display.php");
    } else {
        echo "Error deleting record";
    }
}

mysqli_close($conn);
?>
