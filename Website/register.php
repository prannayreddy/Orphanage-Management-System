<html>
<head>
<title> FORM </title>
<style>
h1{
font-family: sans-serif;
   font-style:italic;
   font-size: 40px;
   color: Crimson;
border-style:outset;
   }
   label{
     display: inline-block;
     float: left;
     clear: left;
     width:140px;
     text-align: left;
   }
   input{
     display: inline-block;
     float: left;
   }
   </style>
</head>
<body background="bg5.gif">
<font color="black">
<?php
require('../../mysqli_connect.php');
// If form submitted, insert values into the database.
if(isset($_POST['submit'])){

    $data_missing = array();
    if(empty($_POST['email'])){

       // Adds name to array
       $data_missing[] = 'email';

   } else {

       // Trim white space from the name and store the name
       $email = ($_POST['email']);
     }
       if(empty($_POST['fname'])){

          // Adds name to array
          $data_missing[] = 'fname';

      } else {

          // Trim white space from the name and store the name
          $fname = ($_POST['fname']);


   }
    if(empty($_POST['lname'])){

          // Adds name to array
          $data_missing[] = 'lname';

      } else {

          // Trim white space from the name and store the name
          $lname = ($_POST['lname']);


   }
    if(empty($_POST['gender'])){

          // Adds name to array
          $data_missing[] = 'gender';

      } else {

          // Trim white space from the name and store the name
          $gender= ($_POST['gender']);


   }
    if(empty($_POST['address'])){

          // Adds name to array
          $data_missing[] = 'address';

      } else {

          // Trim white space from the name and store the name
          $address= ($_POST['address']);


   }
   if(empty($_POST['phno'])){

      // Adds name to array
      $data_missing[] = 'phno';

  } else {

      // Trim white space from the name and store the name
      $phone = ($_POST['phno']);
    }
    if(empty($_POST['income'])){

       // Adds name to array
       $data_missing[] = 'income';

   } else {

       // Trim white space from the name and store the name
       $income= trim($_POST['income']);
     }

     if(empty($_POST['pwd'])){

        // Adds name to array
        $data_missing[] = 'pwd';

    } else {

        // Trim white space from the name and store the name
        $pwd = MD5($_POST['pwd']);
      }
      if(empty($data_missing)){

        require_once('../../mysqli_connect.php');

        $query = "INSERT INTO adopter  VALUES (?,?,?,?,?,?,?,?)";

        $stmt = mysqli_prepare($dbc, $query);

        mysqli_stmt_bind_param($stmt, "ssssssis", $email,$fname,$lname,$gender,$address,$phno,$income,$pwd);

        mysqli_stmt_execute($stmt);

        $affected_rows = mysqli_stmt_affected_rows($stmt);

        if($affected_rows == 1){

					echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='user_login.php'>Login</a></div>";

mysqli_stmt_close($stmt);

        }}}
    else{
?>
<font color="black">
<div class='form'>
<b><h1><center>***PLEASE ENTER YOUR DETAILS***</center></h1></b>

<form name="registration" action="" method="post">
  <div>
<label>EMAIL:</label><input type="email" name="email" required /><br><br>
<label>FIRST NAME:</label> <input type="text" name="fname" required /><br><br>
<label>LAST NAME:</label> <input type="text" name="lname" required /><br><br>
<label>GENDER:</label> <input type="radio" name="gender" value="Male" /><input type="radio" name="gender" value="Female" />(M/F)  <br><br>
<label>ADDRESS:</label> <input type="text" name="address"  required /><br><br>
<label>PHONE NUMBER:</label> <input type="text" name="phno"  required /><br><br>
<label>INCOME:</label> <input type="text" name="income"  required /><br><br>
<label>PASSWORD:</label> <input type="password" name="pwd" required / /><br><br>




<input type="submit" name="submit" value="SUBMIT" />   <input type="reset" value="RESET"/>
</div>

<br><br><br><br>
</font>
<img src="Home-Icon.png" width="50" height="50"><a href="home.php">Back to Homepage</a>
</form>
</div>
<?php } ?>
</body>
</html>
