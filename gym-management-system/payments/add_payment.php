<?php
include("../includes/header.php");
include("../includes/sidebar.php");
include("../config.php");
?>

<div class="main">

<h2>Add Payment</h2>

<div class="form-card">

<form action="insert_payment.php" method="POST">

<div class="form-group">
<label>Select Member</label>

<select name="member_id" required>

<option value="">Select Member</option>

<?php
$query="SELECT * FROM members";
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result)){
?>

<option value="<?php echo $row['member_id']; ?>">
<?php echo $row['name']; ?>
</option>

<?php } ?>

</select>
</div>

<div class="form-group">
<label>Payment Amount</label>
<input type="number" name="amount" placeholder="Enter Payment Amount" required>
</div>

<div class="form-group">
<label>Payment Date</label>
<input type="date" name="payment_date" required>
</div>

<button class="btn">Add Payment</button>

</form>

</div>

</div>

<?php include("../includes/footer.php"); ?>