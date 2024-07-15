<?php
session_start();
//include('includes/header.php');
//include('includes/navbar.php');
$connection=mysqli_connect("localhost","root","areca","arecanutmanagement");

if(isset($_POST['submit']))
{
    $username = $_POST['fullname'];
    $email = $_POST['variety'];
    $password = $_POST['rate'];
    $date=$_POST['date']
    

            $query = "INSERT INTO bookinglist (fullname,name,rate,booked_date) VALUES ('$username','$email','$password','$date')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "booked successfully";
               // $_SESSION['status_code'] = "success";
                header('Location: booking.php');
            }
            else 
            {
                $_SESSION['status'] = "booked successfully";
               // $_SESSION['status_code'] = "error";
                header('Location: booking.php');  
            }
        }
        
