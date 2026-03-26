<?php
include("../config.php");

$plan_name=$_POST['plan_name'];
$price=$_POST['price'];
$duration=$_POST['duration'];

$query="INSERT INTO plans(plan_name,price,duration)
VALUES('$plan_name','$price','$duration')";

mysqli_query($conn,$query);

header("Location: plan_list.php");
?>