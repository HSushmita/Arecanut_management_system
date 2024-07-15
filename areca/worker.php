<?php
session_start();
    
    $fullname = $_POST['fullname'];

    $number = $_POST['number'];
    $address = $_POST['address'];
    $sal=$_POST['salary'];
    
    
  //databaase conection
    $conn = new mysqli('localhost','root','areca','arecanutmanagement');
    if($conn->connect_error){
        die('connectio failed : '.$conn->connect_error);
    }
    else
    {
         
        $stmt = $conn->prepare("insert into workers(wname,phno,address,salary)values(?,?,?,?)");
        $stmt->bind_param("sisi",$fullname,$number,$address,$sal);
        $stmt->execute();

       
           echo "<script> alert('registration successfully...'),window.location='home.php';</script>";
        }
        
       
    
?>