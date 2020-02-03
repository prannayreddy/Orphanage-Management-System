<?php
//include auth.php file on all secure pages
require('../../mysqli_connect.php');
include("auth.php");
$email=$_SESSION['email'];
?>
<!DOCTYPE html>
<html>
<style>
h1{
font-family: sans-serif;
   font-style:italic;
   font-size: 40px;
   color: Crimson;
border-style:outset;
}
</style>

<center>
<head>
<meta charset="utf-8">
<title><h1>Welcome Home</h1></title>
<!-- <link rel="stylesheet" href="css/style.css" /> -->
</head>
<body style="background-image:url('bg5.gif');">
<div class="form">
<p><h1>Welcome  <?php echo $_SESSION['email']; ?>!</h1></p>
<p>This is secure area.</p>
<p><a href="dashboard.php">Dashboard</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</center>
</html>
