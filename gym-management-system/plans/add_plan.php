<?php
include("../includes/header.php");
include("../includes/sidebar.php");
?>

<div class="main">

<h2>Add Membership Plan</h2>

<div class="form-card">
 
<form action="insert_plan.php" method="POST">

<div class="form-group">
<lable>Plan Name</lable>  
<input type="text" name="plan_name" placeholder="Plan Name (1 Month / 3 Month etc.)" required>
</div>

<div class="form-group">
<lable>Plan Price</lable>  
<input type="number" name="price" placeholder="Plan Price" required>
</div>

<div class="form-group">
<lable>Duration</lable>  
<input type="text" name="duration" placeholder="Duration (30 Days / 90 Days etc.)" required>
</div>

<button class="btn">Add Plan</button>

</form>

</div>

<?php include("../includes/footer.php"); ?>