<?php
session_start();
if(isset($_POST['logout_btn']))
{
    session_destroy();
    unset($_SESSION['admin_name']);
    header('location:login.php');
}
?>
