<?php
include("../config.php");
include("../includes/header.php");
include("../includes/sidebar.php");

$id = $_GET['id'];

$query = "SELECT * FROM members WHERE member_id='$id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
?>

<div class="main">

<h2>Edit Member</h2>

<div class="form-card">

<form action="update_member.php" method="POST">

<input type="hidden" name="id" value="<?php echo $row['member_id']; ?>">

<div class="form-group">
<label>Member Name</label>
<input type="text" name="name" value="<?php echo $row['name']; ?>" required>
</div>

<div class="form-group">
<label>Age</label>
<input type="number" name="age" value="<?php echo $row['age']; ?>" required>
</div>

<div class="form-group">
<label>Phone</label>
<input type="text" name="phone" value="<?php echo $row['phone']; ?>">
</div>

<div class="form-group">
<label>Address</label>
<input type="text" name="address" value="<?php echo $row['address']; ?>">
</div>

<button class="btn">Update Member</button>

</form>

</div>

</div>

<?php include("../includes/footer.php"); ?>