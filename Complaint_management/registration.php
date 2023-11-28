<!DOCTYPE html>
<html>
<head>
    <title>Student Complaint Registration</title>
    <style>
/* styles.css */
/* styles.css */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

h2 {
    text-align: center;
}

.complaint-form {
    width: 60%;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
}

input[type="text"],
textarea,
input[type="submit"] {
    width: 40%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;

}

input[type="submit"] {
    
    background-color: #3498db;
    color: #fff;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #2980b9;
}

        </style>
</head>
<body>
    <h2>Student Complaint Registration</h2>
    <form method="post" action="complaints.php">
        <input type="text" name="student_name" placeholder="Your Name" required><br><br>
        <textarea name="complaint_text" placeholder="Complaint" required></textarea><br><br>
        <input type="submit" name="submit" value="Submit Complaint">
    </form>
</body>
</html>
