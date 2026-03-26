<?php
session_start();
require_once("config.php");

if(isset($_POST['login'])){

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn,$query);

if($result && mysqli_num_rows($result)==1){

$_SESSION['admin']=$username;
header("Location: dashboard.php");
exit();

}else{
$error="Invalid Username or Password";
}

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Acro Fitness Admin Login</title>

<link rel="stylesheet" href="css/style.css">

</head>

<body class="login-page">

<div class="login-box">

<h2>ACRO Fitness Login</h2>

<?php
if(isset($error)){
echo "<p style='color:#ff4d4d'>$error</p>";
}
?>

<form method="POST">

<input type="text" name="username" placeholder="Username" required>

<div class="password-box">
<input type="password" name="password" id="password" placeholder="Password" required>
<span onclick="togglePassword()">👁</span>
</div>

<button class="btn" name="login">Login</button>

</form>

</div>

<script>

function togglePassword(){
var x=document.getElementById("password");

if(x.type==="password"){
x.type="text";
}else{
x.type="password";
}
}

</script>

</body>
</html>