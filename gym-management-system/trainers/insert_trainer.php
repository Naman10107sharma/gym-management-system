<?php
include("../config.php");

$name=$_POST['name'];
$specialization=$_POST['specialization'];
$phone=$_POST['phone'];
$experience=$_POST['experience'];

$query="INSERT INTO trainers(name,specialization,phone,experience)
VALUES('$name','$specialization','$phone','$experience')";

mysqli_query($conn,$query);

header("Location: trainer_list.php");
?>