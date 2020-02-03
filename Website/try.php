
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
   </style>
</head>
<body background="bg5.gif">

<font color="black">


<?php
require('../mysqli_connect.php');
// If form submitted, insert values into the database.
if(isset($_POST['submit'])){


   // Trim white space from the name and store the name
   $email = $_POST['email'];

     // Trim white space from the name and store the name
     $fname = ($_POST['fname']);

        // Trim white space from the name and store the name
        $lname = ($_POST['lname']);


      // Trim white space from the name and store the name
    $gender = ($_POST['gender']);

     // Trim white space from the name and store the name
     $address = trim($_POST['address']);

       // Trim white space from the name and store the name
       $phno = ($_POST['phno']);


        // Trim white space from the name and store the name
        $income = ($_POST['income']);


         // Trim white space from the name and store the name
         $dob = ($_POST['dob']);

          // Trim white space from the name and store the name
          $pwd = ($_POST['pwd']);

echo $dob;

      $query = "INSERT INTO adopter VALUES (?,?,?,?,?,?,?,?,?)";

      $stmt = mysqli_prepare($dbc, $query);

      mysqli_stmt_bind_param($stmt, "ssssssiss", $email,$fname,$lname,$gender,$address,$phno,$income,$dob,$pwd);

      mysqli_stmt_execute($stmt);

      $affected_rows = mysqli_stmt_affected_rows($stmt);

      if($affected_rows == 1){

        echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";

mysqli_stmt_close($stmt);

      }else{

        echo "<div class='form'>
<h3>Error</h3>
<br/>Click here to <a href='try.php>Reg</a></div>";
      }}
  else{
?>
<b><h1><center>***PLEASE ENTER YOUR DETAILS***</center></h1></b>

<form action="" method="POST">


        <input placeholder="Email-ID:" type="text" name="email"  size=50  required /></br>
     <input placeholder="First name:" type="text" name="fname" size=30 required ><br><br>
       <input placeholder="Last name:" type="text" name="lname" size=30  required ><br>
          Male<input placeholder="Gender: " type="radio" name="gender" value="Male" /> Female <input type="radio" required name="gender" value="Female"  /></br>
    <input placeholder="Address:      " type="text" name="address" size=50  required /></br>
     <input placeholder="Mobile no:   " type="text" name="phno" size=50 required  /></br>
       <input placeholder="Income:    " type="text" name="income"  size=50  required  /></br>
  <input placeholder="DOB(yyyy-mm-dd):" type="text" name="dob" size=50  required /></br>
         <input placeholder="Password:" type="password" name="pwd"  size=50  required /></br>




<input type="submit" value="submit" />



<img src="Home-Icon.png" width="50" height="50"><a href="home.php">Back to Homepage</a>
</form>
</font>
<?php } ?>
</body>
</html>
