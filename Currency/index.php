<!DOCTYPE html>
<html>
<head>
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

        form {
            width: 300px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="number"], input[type="submit"] {
            width: calc(100% - 22px);
            margin-bottom: 10px;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
    <title>Currency Converter</title>
</head>
<body>
    <h2>Currency Converter (USD to INR)</h2>
    <form method="post" action="op.php">
        <input type="number" name="amount" placeholder="Enter amount in USD">
        <input type="submit" name="submit" value="Convert">
    </form>
</body>
</html>
