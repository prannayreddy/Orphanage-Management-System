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

table {
  height: 40%;
  left: 10%;
  margin: 20px auto;
  overflow-y: scroll;
  position: static;
  width: 50%;
}

tr {
  /*background: #f4f7f8;*/
  border-bottom: 1px solid #FFF;
  margin-bottom: 5px;
}

th,td {
  padding: 10px;
  width: 50;
  text-align: left;
}
</style>
<script>
function go()
{
	alert("Thank you. You will be informed by our team after verification.");
}
</script>

<head>
<meta charset="utf-8">
<title><h1>Welcome Home</h1></title>
<!-- <link rel="stylesheet" href="css/style.css" /> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="background-image:url('bg5.gif');">
  <center>
    <div id="container" >
  <table>
    <div id=menu>

    <tr>
      <h4><th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Date Of Birth</th>
      <th scope="col">Interests</th>
      <th scope="col">Gender</th></h4>
    </tr>


<?php
$i=0;
$temp=array();

//$query1= "SELECT * FROM children";
//$result1 = @mysqli_query($dbc, $query1);
$qy="CALL stored";
$result1=$dbc->query($qy);




while($row = mysqli_fetch_array($result1)){
  $att1=$row['id'];
  $att2=$row['fname'];
  $att3=$row['lname'];
  $att4=$row['dob'];
  $att5=$row['interests'];
  $att6=$row['gender'];
  $temp[$i]='

  <tr>
    <th scope="col"></th>
    <th scope="col"></th>
    <th scope="col"></th>
    <th scope="col"></th>
    <th scope="col"></th>
  </tr>

  <tbody>
        <tr>
          <td>'.$att2.'</td>
          <td>'.$att3.' </td>
          <td>'.$att4.' </td>
          <td>'.$att5.' </td>
          <td>'.$att6.'</td>
<td><button type="button" class="btn btn-success" onClick="go()">REQUEST</button></a></td>

        </tr>
        </tbody>';



  $i++;
}
echo implode("",$temp);

 ?>
 </div></table>
 </div>
<img src="Home-Icon.png" width="50" height="50"><a href="dashboard.php">Back to Dashboard</a>
 </center>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html>
