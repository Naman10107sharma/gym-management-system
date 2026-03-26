<?php
include("../config.php");

$id=$_GET['id'];

$query="DELETE FROM trainers WHERE trainer_id='$id'";

mysqli_query($conn,$query);

header("Location: trainer_list.php");
?>