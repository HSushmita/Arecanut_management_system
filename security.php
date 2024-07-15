<?php
 session_start();
 if(!$_SESSION['admin_name'])
 {
 	header('location:login.php');
 }
?>