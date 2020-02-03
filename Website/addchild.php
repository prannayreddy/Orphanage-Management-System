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
    if(empty($_POST['id'])){

       // Adds name to array
       $data_missing[] = 'id';

   } else {

       // Trim white space from the name and store the name
       $id = ($_POST['id']);
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
    if(empty($_POST['dob'])){

          // Adds name to array
          $data_missing[] = 'dob';

      } else {

          // Trim white space from the name and store the name
          $dob= ($_POST['dob']);


   }
    if(empty($_POST['interests'])){

          // Adds name to array
          $data_missing[] = 'interests';

      } else {

          // Trim white space from the name and store the name
          $interests= ($_POST['interests']);


   }
   if(empty($_POST['gender'])){

      // Adds name to array
      $data_missing[] = 'gender';

  } else {

      // Trim white space from the name and store the name
      $gender = ($_POST['gender']);
    }

      if(empty($data_missing)){

        require_once('../../mysqli_connect.php');

        $query = "INSERT INTO children VALUES (?,?,?,?,?,?)";

        $stmt = mysqli_prepare($dbc, $query);

        mysqli_stmt_bind_param($stmt, "isssss", $id,$fname,$lname,$dob,$interests,$gender);

        mysqli_stmt_execute($stmt);

        $affected_rows = mysqli_stmt_affected_rows($stmt);

        if($affected_rows == 1){

					echo "<div class='form'>
<h3>You have entered successfully.</h3>
<br/>Click here to <a href='e_dashboard.php'>Return to Dashboard</a></div>";

mysqli_stmt_close($stmt);

        }}}
    else{
?>
<font color="black">
<div class='form'>
<b><h1><center>***PLEASE ENTER THE CHILD'S DETAILS***</center></h1></b>

<form name="registration" action="" method="post">
  <div>
<label>ID:</label><input type="text" name="id" required /><br><br>
<label>FIRST NAME:</label> <input type="text" name="fname" required /><br><br>
<label>LAST NAME:</label> <input type="text" name="lname" required /><br><br>
<label>DOB(YYYY-MM-DD):</label> <input type="text" name="dob"  required /><br><br>
<label>INTERESTS:</label> <input type="text" name="interests"  required /><br><br>
<label>GENDER:</label> <input type="radio" name="gender" value="Male" /><input type="radio" name="gender" value="Female" />(M/F)  <br><br>




<input type="submit" name="submit" value="SUBMIT" />   <input type="reset" value="RESET"/>
</div>

<br><br><br><br>
</font>
<img src="Home-Icon.png" width="50" height="50"><a href="e_dashboard.php">Back to Dashboard</a>
</form>
</div>
<?php } ?>
</body>
</html>
