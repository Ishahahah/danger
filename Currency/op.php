<?php
if(isset($_POST['submit'])){
    $amount = $_POST['amount'];
    
    // Conversion rate (1 USD = 75 INR)
    $conversion_rate = 75;

    // Perform the conversion
    $converted_amount = $amount * $conversion_rate;
}
else {
    $converted_amount = "No amount entered."; // Default message if no amount submitted
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Currency Converter - Output</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #333;
            text-align: center;
            margin-top: 50px;
        }

        p {
            text-align: center;
            font-size: 18px;
            margin-top: 20px;
            color: #555;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #333;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h2>Currency Converter - Output</h2>
    <p><?php echo isset($amount) ? "$amount USD is equal to $converted_amount INR" : $converted_amount; ?></p>
    <p><a href="index.php">Go back</a></p>
</body>
</html>
