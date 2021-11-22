<?php
session_start();
// remove all session variables
if(!isset($_SESSION['id']))
{
  header('location:login.php');
}
unset($_SESSION['id']); 

// destroy the session
session_destroy();
header('location: ../index.php');
?>