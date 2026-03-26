<?php
include("../config.php");

$member_id=$_POST['member_id'];
$amount=$_POST['amount'];
$payment_date=$_POST['payment_date'];

$query="INSERT INTO payments(member_id,amount,payment_date)
VALUES('$member_id','$amount','$payment_date')";

mysqli_query($conn,$query);

header("Location: payment_list.php");
?>