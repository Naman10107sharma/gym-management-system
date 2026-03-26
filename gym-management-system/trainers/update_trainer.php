<?php
include("../config.php");

$id=$_POST['id'];
$name=$_POST['name'];
$specialization=$_POST['specialization'];
$phone=$_POST['phone'];
$experience=$_POST['experience'];

$query="UPDATE trainers SET
name='$name',
specialization='$specialization',
phone='$phone',
experience='$experience'
WHERE trainer_id='$id'";

mysqli_query($conn,$query);

header("Location: trainer_list.php");
?>