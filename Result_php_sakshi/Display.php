<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>


    <style>
table{
    border:2px solid red;
    
}
td,th{
    border:1px solid black;
    
}
.bt {
    
    margin-top: 250px;
}

#btn{
    width: 150px; /* Set the desired width */
    height: 60px; /* Set the desired height */
    font-size: 18px; /* Optionally, adjust the font size */
    background-color:violet;
    color:white;
    border-radius:3px;
}
</style>
</head>
<body>
 
        <table>
            <tr>
                <th>Roll Number</th>
                <th>Name</th>
                <th>Branch</th>
                <th>MSE</th>
                <th>ESE</th>
            </tr>
            <?php
$conn=mysqli_connect("localhost","root","","result");
// if($conn->connect_error){
//     die("connetion failed");
// }


$sql="SELECT Roll,Name,Branch,MSE,ESE from data";
$result=$conn->query($sql);

if($result->num_rows >0){
while($row=$result->fetch_assoc()){
    echo "<tr><td>".$row["Roll"]."</td><td>".$row["Name"]."</td><td>".$row["Branch"]."</td><td>".$row["MSE"]."</td><td>".$row["ESE"]."</td><tr>";
}
echo "</table>";
}
// else{
//     echo "no data";
// }
   $conn->close();
   ?>
        </table>
   


<div class="bt">
  <input id="btn" type="button" value="Check Result" onclick="redirectToDesiredPage()">
</div>  
<script>
        function redirectToDesiredPage() {
            // Replace 'desired-page.html' with the URL of the page you want to navigate to
            window.location.href = 'individual.php';
        }
    </script>
</body>
</html>