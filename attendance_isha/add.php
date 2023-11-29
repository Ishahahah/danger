<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $rollno=$_POST['rollno'];
    $name=$_POST['name'];

$sql="insert into `students`(`roll no`, name) values('$rollno', '$name')";
$result=mysqli_query($con, $sql);

if($result){
    //echo "Data inserted successfully";
    header('location:home.php');
}else{
    die(mysqli_error($con));
}


}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>
    <div>
        <h1>Register new Student</h1>
        <form method="post">
            <div>
                <label for="rollno">Roll no: </label>
                <input type="number" id="rollno" name="rollno" autocomplete="off">         
            </div>
            <div>
                <label for="name">Name: </label>
                <input type="text" id="name" name="name" autocomplete="off">         
            </div>
            <div>
                <button type="submit" name="submit">Submit</button>
            </div>
        </form>

    </div>
    
</body>
</html>