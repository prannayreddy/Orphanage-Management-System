<?php
session_start();
if(!isset($_SESSION["email"])){
header("Location: user_login.php");
exit(); }
?>
