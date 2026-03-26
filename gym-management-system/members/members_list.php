<?php
include("../includes/header.php");
include("../includes/sidebar.php");
include("../config.php");
?>

<div class="main">

<h2>Members List</h2>

<form method="GET" class="search-box">

<input 
type="text" 
name="search" 
placeholder="Search member by name, phone or plan"
value="<?php if(isset($_GET['search'])) echo $_GET['search']; ?>"
>

<button type="submit" class="search-btn">Search</button>

</form>

<br><br>

<table id="memberTable">

<tr>
<th>S.No</th>
<th>Name</th>
<th>Age</th>
<th>Phone</th>
<th>Plan</th>
<th>Join Date</th>
<th>Expiry Date</th>
<th>Action</th>
</tr>

<?php

/* Search System */

$search = "";

if(isset($_GET['search'])){
$search = $_GET['search'];
}

$query = "SELECT * FROM members 
WHERE name LIKE '%$search%' 
OR phone LIKE '%$search%' 
OR plan LIKE '%$search%'";

$result = mysqli_query($conn,$query);

/* Serial Number */

$serial = 1;

while($row = mysqli_fetch_assoc($result)){

$today = date("Y-m-d");
$class = ($row['expiry_date'] < $today) ? "expired" : "";

?>

<tr class="<?php echo $class; ?>">

<td><?php echo $serial++; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['age']; ?></td>

<td><?php echo $row['phone']; ?></td>

<td><?php echo $row['plan']; ?></td>

<td><?php echo $row['join_date']; ?></td>

<td>

<?php
echo $row['expiry_date'];

if($row['expiry_date'] < date("Y-m-d")){
echo " (Expired)";
}
?>

</td>

<td>

<a class="btn" href="edit_member.php?id=<?php echo $row['member_id']; ?>">Edit</a>

<a class="btn" onclick="return confirmDelete()"
href="delete_member.php?id=<?php echo $row['member_id']; ?>">Delete</a>

</td>

</tr>

<?php
}
?>

</table>

</div>

<?php include("../includes/footer.php"); ?>