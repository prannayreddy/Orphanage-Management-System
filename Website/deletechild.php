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


      if(empty($data_missing)){

        require_once('../../mysqli_connect.php');

        $query = "DELETE FROM children where id=?";

        $stmt = mysqli_prepare($dbc, $query);

        mysqli_stmt_bind_param($stmt, "i", $id);

        mysqli_stmt_execute($stmt);

        $affected_rows = mysqli_stmt_affected_rows($stmt);

        if($affected_rows == 1){

					echo "<div class='form'>
<h3>You have deleted the child successfully.</h3>
<br/>Click here to <a href='e_dashboard.php'>Return to Dashboard</a></div>";

mysqli_stmt_close($stmt);

        }}}
    else{
?>
<font color="black">
<div class='form'>
<b><h1><center>***DELETING CHILD ENTRY***</center></h1></b>

<form name="registration" action="" method="post">
  <div>
<label>Enter The Child's ID:</label><input type="text" name="id" required /><br><br>

<input type="submit" name="submit" value="DELETE" />   <input type="reset" value="RESET"/>
</div>

<br><br><br><br>
</font>
<img src="Home-Icon.png" width="50" height="50"><a href="e_dashboard.php">Back to Dashboard</a>
</form>
</div>
<?php } ?>
</body>
</html>
