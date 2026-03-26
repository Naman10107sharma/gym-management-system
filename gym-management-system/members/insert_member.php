<?php
include("../config.php");

$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$plan=$_POST['plan'];

$join_date = $_POST['join_date'];

/* plan duration fetch */
$plan_query = mysqli_query($conn,"SELECT duration FROM plans WHERE plan_name='$plan'");
$plan_data = mysqli_fetch_assoc($plan_query);

$days = $plan_data['duration'];

$expiry_date = date("Y-m-d", strtotime($join_date." + $days days"));

$query="INSERT INTO members(name,age,gender,phone,address,plan,join_date,expiry_date)
VALUES('$name','$age','$gender','$phone','$address','$plan','$join_date','$expiry_date')";

mysqli_query($conn,$query);

header("Location: members_list.php");
?>