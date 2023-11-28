

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            display: flex;
            justify-content: space-between;
        }

        .left {
            width: 50%;
        }

        .right {
            width: 50%;
        }
    </style>
</head>
<body>
    <div class="container">


        <div class="left">
            <p>
                <!-- Your paragraph content goes here -->
                Lorem ipsum dolor sit amet, consectetur adipisicing elit...
            </p>
        </div>

        <div class="right">
            <form action="show.php" method="POST">
            <label for="num">Enter a value:</label>
            <input type="number" name="num" value="num" id="num" placeholder="Enter student roll number">
        </form>
        </div>


    </div>
</body>
</html>
