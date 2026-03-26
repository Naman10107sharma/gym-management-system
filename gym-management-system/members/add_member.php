<?php
include("../includes/header.php");
include("../includes/sidebar.php");
include("../config.php");
?>

<div class="main">

<h2>Add New Member</h2>

<div class="form-card">

<form action="insert_member.php" method="POST">

<div class="form-group">
<label>Member Name</label>
<input type="text" name="name" placeholder="Enter Member Name" required>
</div>

<div class="form-group">
<label>Age</label>
<input type="number" name="age" placeholder="Enter Age" required>
</div>

<div class="form-group">
<label>Gender</label>
<select name="gender">
<option>Male</option>
<option>Female</option>
</select>
</div>

<div class="form-group">
<label>Phone Number</label>
<input type="text" name="phone" placeholder="Enter Phone Number">
</div>

<div class="form-group">
<label>Joining Date</label>
<input type="date" name="join_date" required>
</div>

<div class="form-group">
<label>Address</label>
<input type="text" name="address" placeholder="Enter Address">
</div>

<div class="form-group">
<label>Select Plan</label>
<select name="plan">

<?php
$query="SELECT * FROM plans";
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result)){
?>

<option value="<?php echo $row['plan_name']; ?>">
<?php echo $row['plan_name']; ?>
</option>

<?php } ?>

</select>
</div>

<button class="btn">Add Member</button>

</form>

</div>

</div>

<?php include("../includes/footer.php"); ?>