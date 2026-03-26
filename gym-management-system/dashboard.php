<?php
session_start();
include("config.php");

if(!isset($_SESSION['admin'])){
header("Location: login.php");
}

$members = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM members"));
$trainers = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM trainers"));
$plans = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM plans"));
$payments = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM payments"));

/* Total Revenue */

$revenue_query = mysqli_query($conn,"SELECT SUM(amount) AS total_revenue FROM payments");
$revenue_data = mysqli_fetch_assoc($revenue_query);
$total_revenue = $revenue_data['total_revenue'];

/* Expired Members Count */

$today = date("Y-m-d");

$expired_query = mysqli_query($conn,"SELECT * FROM members WHERE expiry_date < '$today'");
$expired_members = mysqli_num_rows($expired_query);

/* Monthly Income Data */

$monthly_query = mysqli_query($conn,"
SELECT MONTH(payment_date) as month, SUM(amount) as total 
FROM payments 
GROUP BY MONTH(payment_date)
");

$months = [];
$income = [];

while($row = mysqli_fetch_assoc($monthly_query)){
$months[] = $row['month'];
$income[] = $row['total'];
}

include("includes/header.php");
include("includes/sidebar.php");
?>

<div class="main">

<h1>Dashboard</h1>

<div class="cards">

<a href="members/members_list.php" class="card">
<h3>Total Members</h3>
<p class="number"><?php echo $members; ?></p>
</a>

<a href="members/members_list.php" class="card">
<h3>Expired Members</h3>
<p class="number"><?php echo $expired_members; ?></p>
</a>

<a href="trainers/trainer_list.php" class="card">
<h3>Total Trainers</h3>
<p class="number"><?php echo $trainers; ?></p>
</a>

<a href="plans/plan_list.php" class="card">
<h3>Total Plans</h3>
<p class="number"><?php echo $plans; ?></p>
</a>

<a href="payments/payment_list.php" class="card">
<h3>Total Payments</h3>
<p class="number"><?php echo $payments; ?></p>
</a>

<a href="payments/payment_list.php" class="card">
<h3>Total Revenue</h3>
<p class="number">₹ <?php echo $total_revenue ? $total_revenue : 0; ?></p>
</a>

</div>

<br><br>

<div class="chart-box">

<h2>Monthly Revenue</h2>

<canvas id="incomeChart"></canvas>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

const ctx = document.getElementById('incomeChart').getContext('2d');

const gradient = ctx.createLinearGradient(0,0,0,400);
gradient.addColorStop(0,"#5110ba");
gradient.addColorStop(1,"#060010");

new Chart(ctx, {
type: 'bar',
data: {
labels: <?php echo json_encode($months); ?>,
datasets: [{
label: 'Monthly Revenue',
data: <?php echo json_encode($income); ?>,
backgroundColor: gradient,
borderRadius: 6,
borderSkipped:false
}]
},
options: {
responsive:true,
plugins:{
legend:{
display:true
},
tooltip:{
backgroundColor:"#111",
titleColor:"#fff",
bodyColor:"#fff"
}
},
scales:{
y:{
beginAtZero:true,
grid:{
color:"#eee"
}
},
x:{
grid:{
display:false
}
}
},
animation:{
duration:1500
}
}
});

</script>

<?php
include("includes/footer.php");
?>