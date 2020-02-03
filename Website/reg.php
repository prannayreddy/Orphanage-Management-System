<!-- <?php
require('../../mysqli_connect.php');
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



      require_once('../../mysqli_connect.php');

      $query = "INSERT INTO adopter  VALUES (?,?,?,?,?,?,?,?,?)";

      $stmt = mysqli_prepare($dbc, $query);

      mysqli_stmt_bind_param($stmt, "ssssssiss", $email,$fname,$lname,$gender,$address,$phno,$income,$dob,$pwd);

      mysqli_stmt_execute($stmt);

      $affected_rows = mysqli_stmt_affected_rows($stmt);

      if($affected_rows == 1){

        echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";

mysqli_stmt_close($stmt);

      }
  else{
?> -->

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

<b><h1><center>***PLEASE ENTER YOUR DETAILS***</center></h1></b>

<form action="" method="post">

<pre>
Email-ID:         <input type="text" name="email" value="" size=50 maxlength=50 required /></br>
First name:       <input type="text" name="fname" value="" size=30 maxlength=50 required  onclick=><br><br>
Last name:        <input type="text" name="lname" value="" size=30 maxlength=50 required ><br>
Gender:           Male<input type="radio" name="gender" value="Male" /> Female <input type="radio" required name="gender" value="Female"  /></br>
Address:          <input type="text" name="address" value="" size=50 maxlength=50 required /></br>
Mobile no:        <input type="text" name="phno" value="" size=50 maxlength=50 required  /></br>
Income:           <input type="text" name="income" value="" size=50 maxlength=50 required  /></br>
DOB(yyyy-mm-dd):  <input type="text" name="dob" value="" size=50 maxlength=50 required /></br>
Password:         <input type="password" name="pwd" value="" size=50 maxlength=50 required /></br>


<hr COLOR = black align=center size=4 width=2000>
<center>
<input type="submit" value="submit" /><input type="reset" value="RESET"/>
</center>
</pre>
</font>
<img src="Home-Icon.png" width="50" height="50"><a href="home.php">Back to Homepage</a>
</form>
<!-- <?php }} ?> -->
</body>
</html>
