<?php
include 'connection.php';

$query = "SELECT * FROM complaints";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Complaints</title>
    <style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

h2 {
    text-align: center;
}

table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        
        th {
            background-color: #f2f2f2;
            font-weight: bold;
            text-align: left;
        }
        
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        tr:hover {
            background-color: #e5e5e5;
        }
.complaint-table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
}

.complaint-table th, .complaint-table td {
    border: 1px solid #ddd;
    padding: 8px;
}

.complaint-table th {
    background-color: #f2f2f2;
    font-weight: bold;
    text-align: left;
}

.complaint-table tr:nth-child(even) {
    background-color: #f9f9f9;
}

.complaint-table tr:hover {
    background-color: #e5e5e5;
}
</style>
</head>
<body>
    <h2>View Complaints</h2>
    <table >
        <tr>
           
            <th>Student Name</th>
            <th>Complaint Text</th>
          
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                
                <td><?php echo $row['student_name']; ?></td>
                <td><?php echo $row['complaint_text']; ?></td>
              
            </tr>
        <?php } ?>
    </table>
</body>
</html>
