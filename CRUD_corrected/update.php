<?php
include 'connection.php';

$id = $_GET['id'] ?? null;

if ($_SERVER["REQUEST_METHOD"] == "POST" && $id !== null) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    
    $sql = "UPDATE emp SET name='$name', gender='$gender' WHERE id='$id'";
    
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
        header("Location: display.php");
    } else {
        echo "Error updating record";
    }
}

if ($id !== null) {
    $sql = "SELECT * FROM emp WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Data</title>
</head>
<body>
    <?php if(isset($row)) : ?>
    <h2>Update Employee Data</h2>
    <form method="post" action="">
        Name: <input type="text" name="name" value="<?= $row['name'] ?>"><br><br>
        Gender: <input type="text" name="gender" value="<?= $row['gender'] ?>"><br><br>
        <input type="submit" value="Update">
    </form>
    <?php endif; ?>
</body>
</html>