<?php
include("../includes/header.php");
include("../includes/sidebar.php");
include("../config.php");
?>

<div class="main">

<h2>Membership Plans</h2>

<table>

<tr>
<th>S.No</th>
<th>Plan Name</th>
<th>Price</th>
<th>Duration</th>
<th>Action</th>
</tr>

<?php

$query="SELECT * FROM plans";
$result=mysqli_query($conn,$query);

$serial = 1;
while($row=mysqli_fetch_assoc($result)){

?>

<tr>

<td><?php echo $serial++; ?></td>

<td><?php echo $row['plan_name']; ?></td>

<td><?php echo $row['price']; ?></td>

<td><?php echo $row['duration']; ?></td>

<td>

<a class="btn" href="edit_plan.php?id=<?php echo $row['plan_id']; ?>">Edit</a>

<a class="btn" onclick="return confirmDelete()"
href="delete_plan.php?id=<?php echo $row['plan_id']; ?>">Delete</a>

</td>

</tr>

<?php } ?>

</table>

</div>

<?php include("../includes/footer.php"); ?>