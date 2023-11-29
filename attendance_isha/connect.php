<?php

$con=new mysqli("localhost", "root", "", "attendance", 3306);
if(!$con){
    die(mysqli_error($con));
}