<?php
include("../config.php");

$id=$_POST['id'];
$name=$_POST['name'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$address=$_POST['address'];

$query="UPDATE members SET
name='$name',
age='$age',
phone='$phone',
address='$address'
WHERE member_id='$id'";

mysqli_query($conn,$query);

header("Location: members_list.php");
?>