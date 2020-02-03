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
<p><h1>Dashboard  <?php echo $_SESSION['email']; ?>!</h1></p>
<p><h1> EMPLOYEE PAGE</h1></p>
<ul>
  <li><a href="e_find_kid.php">
    List Of Children</a></li><br><br>
    <li><a href="e_find_fund.php">
      List Of Fundraisers</a></li><br><br>
      <li><a href="addchild.php">
        Add a Child</a></li><br><br>
        <li><a href="addfund.php">
          Add a Fundraiser</a></li><br><br>
          <li><a href="deletechild.php">
            Delete a Child</a></li><br><br>
            <li><a href="deletefund.php">
              Delete a Fundraiser</a></li><br><br>
              <li><a href="e_tot.php">
                Accounts</a></li><br>
</ul>
</div>
<img src="Home-Icon.png" width="50" height="50"><a href="logout.php">LOGOUT</a>
</body>
</center>
</html>
