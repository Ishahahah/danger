<?php
include 'connect.php';

// Assuming you have a form submission to update attendance
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $allRollNumbers = array_column(mysqli_fetch_all(mysqli_query($con, "SELECT `roll no` FROM students")), 0);

    foreach ($allRollNumbers as $rollNo) {
        // Check if the checkbox is checked
        $status = isset($_POST['attendance'][$rollNo]) ? 'Present' : 'Absent';

        // Update your database with the roll number, name, and attendance status
        $updateQuery = "UPDATE students SET status = '$status' WHERE `roll no` = '$rollNo'";
        mysqli_query($con, $updateQuery);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Attendance</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Student Attendance</h1>
    <button><a href="add.php">Add Student</a></button>
    <div>
        <form method="post">
            <table>
                <thead>
                    <tr>
                        <th scope='col'>Roll No.</th>
                        <th scope='col'>Name</th>
                        <th scope='col'>Attendance</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM students";
                    $result = mysqli_query($con, $sql);

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $rollNo = $row['roll no'];
                            $name = $row['name'];
                            $attendanceStatus = $row['status'];

                            echo '<tr>
                                <td>' . $rollNo . '</td>
                                <td>' . $name . '</td>
                                <td>
                                    <input type="checkbox" name="attendance[' . $rollNo . ']" ' . ($attendanceStatus === 'Present' ? 'checked' : '') . '>
                                </td>
                            </tr>';
                        }
                    }
                    ?>
                </tbody>
            </table>
            <button type="submit">Submit Attendance</button>
        </form>
    </div>
</body>
</html>
