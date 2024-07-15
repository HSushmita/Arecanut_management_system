<?php
session_start();
    $fullname= $_POST['fullname'];
    $email = $_POST['email'];
    $variety = $_POST['variety'];
    
    
  //databaase conection
    $conn = new mysqli('localhost','root','','registration');
    if($conn->connect_error){
        die('connectio failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into purchase_details(name,email,variety)values(?,?,?,)");
        $stmt->bind_param("ssi",$fullname,$email,$variety);
        $stmt->execute();
        echo "registration successfully...";
        $stmt->close();
        $conn->close();
        
    }
?>