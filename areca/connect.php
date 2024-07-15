<?php
    
    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['confirmpassword'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    
    
  //databaase conection
    $conn = new mysqli('localhost','root','areca','arecanutmanagement');
    if($conn->connect_error){
        die('connectio failed : '.$conn->connect_error);
    }
    else
    {
         if($password===$repassword){
        $stmt = $conn->prepare("insert into user_details(fullname,gender,email,passwd,ph_number,address)values(?,?,?,?,?,?)");
        $stmt->bind_param("ssssis",$fullname,$gender,$email,$password,$number,$address);
        $stmt->execute();

       
           echo "<script> alert('registration successfully...'),window.location='login.html';</script>";
        }
        else{
            echo"<script> alert('password and confirm password are different'),window.location='reg.html';</script>";
        }
       
    }
?>