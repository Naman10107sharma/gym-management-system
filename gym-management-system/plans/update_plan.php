<?php
include("../config.php");

$id=$_POST['id'];
$plan_name=$_POST['plan_name'];
$price=$_POST['price'];
$duration=$_POST['duration'];

$query="UPDATE plans SET
plan_name='$plan_name',
price='$price',
duration='$duration'
WHERE plan_id='$id'";

mysqli_query($conn,$query);

header("Location: plan_list.php");
?>