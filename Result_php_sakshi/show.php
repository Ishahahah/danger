

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
        }

        .result-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            background-color:pink;
        }

        h1 {
            color: #333;
        }

        .result-info {
            text-align: left;
        }

        .result-info p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <h1>Result Details</h1>
        <div class="result-info">
          
        

        
<?php
$conn=mysqli_connect("localhost","root","","result");
// Get the ID from the form submission
$id = $_POST['num']; // Assuming you're using POST

// Query the database
$sql = "SELECT * FROM data WHERE Roll = $id"; // Modify your_table to your table name
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        // Display the data on the other page
        // You can format and display it as needed
        echo "Roll: " . $row["Roll"] . "<br> ";
        echo "Name: " . $row["Name"] . "<br>";


        echo "Branch: " . $row["Branch"] . "<br>";
       

        echo "MSE: " .$row["MSE"]. "<br>";
        echo "ESE: " . $row["ESE"] . "<br>";
        echo "Total: " . $row["ESE"]+$row["MSE"] ."out of 150" ."<br>";
        $m= $row["MSE"]*30/100+$row["ESE"]*70/100;

        echo "Total %: " . $m . "<br>";
        // Add more fields as needed
    }
} else {
    echo "Record not found";
}


?>

