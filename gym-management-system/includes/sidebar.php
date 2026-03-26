<?php
$base_url = "http://localhost/gym-management-system/";
?>

<div class="sidebar">

<div class="logo">

<img src="<?php echo $base_url; ?>images/logo.png" alt="Logo">

<span>Acro Fitness</span>

</div>

<a href="<?php echo $base_url; ?>dashboard.php" class="active">Dashboard</a>

<a href="<?php echo $base_url; ?>members/add_member.php" class="active">Add Member</a>
<a href="<?php echo $base_url; ?>members/members_list.php" class="active">Members List</a>

<a href="<?php echo $base_url; ?>trainers/add_trainer.php" class="active">Add Trainer</a>
<a href="<?php echo $base_url; ?>trainers/trainer_list.php" class="active">Trainer List</a>

<a href="<?php echo $base_url; ?>plans/add_plan.php" class="active">Add Plan</a>
<a href="<?php echo $base_url; ?>plans/plan_list.php" class="active">Plans List</a>

<a href="<?php echo $base_url; ?>payments/add_payment.php" class="active">Add Payment</a>
<a href="<?php echo $base_url; ?>payments/payment_list.php" class="active">Payments</a>

<a href="<?php echo $base_url; ?>logout.php" class="active">Logout</a>

</div>