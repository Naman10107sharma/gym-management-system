<?php
include("../includes/header.php");
include("../includes/sidebar.php");
include("../config.php");
?>

<div class="main">

<h2>Add Trainer</h2>

<div class="form-card">

<form action="insert_trainer.php" method="POST">

<div class="form-group">
<lable>Trainer Name</lable>    
<input type="text" name="name" placeholder="Trainer Name" required>
</div>

<div class="form-group">
<lable>Specialization</lable>    
<input type="text" name="specialization" placeholder="Specialization (Yoga, Cardio etc.)">
</div>

<div class="form-group">
<lable>Phone Number</lable>    
<input type="text" name="phone" placeholder="Phone Number">
</div>

<div class="form-group">
<lable>Experience</lable>    
<input type="text" name="experience" placeholder="Experience (Years)">
</div>


<button class="btn">Add Trainer</button>

</form>

</div>

<?php include("../includes/footer.php"); ?>