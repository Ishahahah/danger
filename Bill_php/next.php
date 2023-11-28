<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Form Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        #pay{
            background-color:pink;
        }
    </style>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $billnumber = $_POST['billnumber'];
    $address = $_POST['address'];
    $units = $_POST['units'];
    $startdate = $_POST['sdate'];
    $enddate = $_POST['edate'];

   

   $sum=0;
    if($units>0 && $units<=50){
    $sum=3.50*$units;
    }
    if($units>50 && $units<=150){
        $sum=((3.50*50)+(($units-50)*4));
    }
    if($units>150 && $units<=250){
        $sum=(3.50*50)+(100*4)+(($units-150)*5.20);
    }
if($units>250){
    $sum=(3.50*50)+(100*4)+(150*5.20)+(($units-250)*6.50);
}

?>
    <table>
        <tr ><td colspan="2"><h2>Electricity Bill </td></h2></tr>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Bill Number</td>
            <td><?php echo $billnumber; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
        <tr>
            <td>No of Units</td>
            <td><?php echo $units; ?></td>
        </tr>
        <tr>
            <td>Start Date</td>
            <td><?php echo $startdate; ?></td>
        </tr>
        <tr>
            <td>End Date</td>
            <td><?php echo $enddate; ?></td>
        </tr>
        <tr>
            <td >Amount Payable</td>
            <td id="pay"><?php echo $sum; ?></td>
        </tr>

        <tr>
            <td colspan="2">Billing Rates:</td>
        </tr>
        <tr>
            <td colspan="2">
                50 units – Rs. 3.50/unit,<br>
                for next 100 units – Rs. 4.00/unit,<br>
                for next 100 units – Rs. 5.20/unit,<br>
                for units above 250 – Rs. 6.50/unit
            </td>
        </tr>
    </table>
<?php
}
?>
</body>
</html>
