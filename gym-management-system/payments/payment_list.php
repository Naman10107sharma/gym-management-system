<?php
include("../includes/header.php");
include("../includes/sidebar.php");
include("../config.php");
?>

<div class="main">

<h2>Payment History</h2>

<table>

<tr>
<th>S.No</th>
<th>Member Name</th>
<th>Amount</th>
<th>Payment Date</th>
</tr>

<?php

$query="SELECT payments.payment_id, members.name, payments.amount, payments.payment_date
FROM payments
JOIN members ON payments.member_id = members.member_id";

$result=mysqli_query($conn,$query);

$serial = 1;
while($row=mysqli_fetch_assoc($result)){

?>

<tr>

<td><?php echo $serial++; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['amount']; ?></td>

<td><?php echo $row['payment_date']; ?></td>

</tr>

<?php } ?>

</table>

</div>

<?php include("../includes/footer.php"); ?>