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
<p><h1>Dashboard<?php echo $_SESSION['email']; ?>!</h1></p>
<ul>
  <li><a href="find_kid.php">
    Find Your Future KID HERE!</a></li><br><br>
    <li><a href="find_fund.php">
      Check Our Fundraisers Here!</a></li><br><br>

</ul>
</div>
<img src="Home-Icon.png" width="50" height="50"><a href="logout.php">LOGOUT</a>
</body>
</center>
</html>
