<?php
include("../config.php");
include("../includes/header.php");
include("../includes/sidebar.php");

$id=$_GET['id'];

$query="SELECT * FROM trainers WHERE trainer_id='$id'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
?>

<div class="main">

<h2>Edit Trainer</h2>

<div class="form-card">

<form action="update_trainer.php" method="POST">
  
<input type="hidden" name="id" value="<?php echo $row['trainer_id']; ?>">

<div class="form-group">
<lable>Name</lable>  
<input type="text" name="name" value="<?php echo $row['name']; ?>">
</div>

<div class="form-group">
<lable>Specialization</lable>  
<input type="text" name="specialization" value="<?php echo $row['specialization']; ?>">
</div>

<div class="form-group">
<lable>Phone</lable>  
<input type="text" name="phone" value="<?php echo $row['phone']; ?>">
</div>

<div class="form-group">
<lable>Experience</lable>  
<input type="text" name="experience" value="<?php echo $row['experience']; ?>">
</div>

<button class="btn">Update Trainer</button>

</form>

</div>

<?php include("../includes/footer.php"); ?>