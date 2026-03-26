<?php
include("../includes/header.php");
include("../includes/sidebar.php");
include("../config.php");
?>

<div class="main">

<h2>Trainer List</h2>

<form method="GET" class="search-box">

<input 
type="text" 
name="search" 
placeholder="Search trainer by name or phone"
value="<?php if(isset($_GET['search'])) echo $_GET['search']; ?>"
>

<button type="submit" class="search-btn">Search</button>

</form>

<br><br>

<table id="trainerTable">

<tr>
<th>S.No</th>
<th>Name</th>
<th>Specialization</th>
<th>Phone</th>
<th>Experience</th>
<th>Action</th>
</tr>

<?php

$search = "";

if(isset($_GET['search'])){
$search = $_GET['search'];
}

$query = "SELECT * FROM trainers 
WHERE name LIKE '%$search%' 
OR phone LIKE '%$search%'";

$result = mysqli_query($conn,$query);

$serial = 1;
while($row = mysqli_fetch_assoc($result)){

?>

<tr>

<td><?php echo $serial++; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['specialization']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['experience']; ?></td>

<td>

<a class="btn" href="edit_trainer.php?id=<?php echo $row['trainer_id']; ?>">Edit</a>

<a class="btn" onclick="return confirmDelete()"
href="delete_trainer.php?id=<?php echo $row['trainer_id']; ?>">Delete</a>

</td>

</tr>

<?php
}
?>

</table>

</div>

<?php include("../includes/footer.php"); ?>