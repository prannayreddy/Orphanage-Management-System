<!DOCTYPE html>
<html>
<head>
<title> ***EMPLOYEE LOGIN***</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<style>
h1{
font-family: sans-serif;
   font-style:italic;
   font-size: 40px;
   color: Crimson;
border-style:outset;
}
</style>
</head>

<body style="background-image:url('bg5.gif');">
  <?php
  require('../../mysqli_connect.php');
  session_start();
  // If form submitted, insert values into the database.
  if (isset($_POST['email'])){
          // removes backslashes
  	$email = stripslashes($_REQUEST['email']);
          //escapes special characters in a string
  	$email = mysqli_real_escape_string($dbc,$email);
  	$password = stripslashes($_REQUEST['pwd']);
  	$password = mysqli_real_escape_string($dbc,$password);
  	//Checking is user existing in the database or not
          $query = "SELECT * FROM employee`` WHERE email='$email'
  and pwd='".md5($password)."'";
  	 $result=mysqli_query($dbc,$query);
  	$rows = mysqli_num_rows($result);
          if($rows==1){
  	    $_SESSION['email'] = $email;
              // Redirect user to index.php
  	    header("Location: e_index.php");
      }else{
        echo "<div class='form'>
  <h3>Incorrect Password/EmailID</h3>
  <br/>Click here to <a href='employee_login.php'>Login</a></div>";
      }
    }else{

  ?>
<center><h1>EMPLOYEE LOGIN </h1></center>
<div style:"padding:200px 500px 100px 500px;">
  <div class="wrap">
<center>
<form action="" method="post" name=login>
  <p style="float:center;">
<input type="email" name="email"  placeholder="Email" value="" size="30" required>
</p>
   <p style="float:center;">
 <input type="password" name="pwd" placeholder="Password" value="" size="30" required>
 </p>
<p>
 <input type="submit" value="Sign In" class="btn btn-dark btn-sm" value="" size="30">
     </p>
<img src="Home-Icon.png" width="50" height="50"><a href="home.php">Back to Homepage</a>
</form>
</center>
</div>
<?php } ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
