<?php
include("../config.php");

$id = $_GET['id'];

/* Pehle member ke payments delete karo */

mysqli_query($conn, "DELETE FROM payments WHERE member_id='$id'");

/* Phir member delete karo */

$query = "DELETE FROM members WHERE member_id='$id'";
mysqli_query($conn, $query);

header("Location: members_list.php");
exit();

?>