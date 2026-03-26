<?php
include("../config.php");

$id=$_GET['id'];

$query="DELETE FROM plans WHERE plan_id='$id'";

mysqli_query($conn,$query);

header("Location: plan_list.php");
?>