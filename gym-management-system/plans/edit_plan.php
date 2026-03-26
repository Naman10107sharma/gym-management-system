<?php
include("../config.php");
include("../includes/header.php");
include("../includes/sidebar.php");

$id=$_GET['id'];

$query="SELECT * FROM plans WHERE plan_id='$id'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
?>

<div class="main">

<h2>Edit Plan</h2>

<div class="form-card">
  
<form action="update_plan.php" method="POST">
  
<input type="hidden" name="id" value="<?php echo $row['plan_id']; ?>">

<div class="form-group">
<lable>Plan Name</lable>  
<input type="text" name="plan_name" value="<?php echo $row['plan_name']; ?>">
</div>

<div class="form-group">
<lable>Price</lable>  
<input type="number" name="price" value="<?php echo $row['price']; ?>">
</div>

<div class="form-group">
<lable>Duration</lable>  
<input type="text" name="duration" value="<?php echo $row['duration']; ?>">
</div>

<button class="btn">Update Plan</button>

</form>

</div>

<?php include("../includes/footer.php"); ?>