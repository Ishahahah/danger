<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <form method="POST" action="code.php">
        <div class="mb-3">
          <label for="name" class="form-label">Enter name</label>
          <input type="text"  id="name" name="name">
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">Enter gender</label>
            <input type="text"  id="gender" name="gender">
          </div>
  
           
        


        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
    
</body>
</html>