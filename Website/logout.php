<?php
session_start();
// Destroying All Sessions
 $_SESSION['email'] = NULL;
if(session_destroy())
{
// Redirecting To Home Page
header("Location: home.php");
}
?>
