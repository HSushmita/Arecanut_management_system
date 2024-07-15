<?php
session_start();
  $email = $_POST['email'];
  $password = $_POST['password'];

  //database connection
  $con = new mysqli("localhost","root","areca","arecanutmanagement");
  if($con->connect_error){
    die("Failed to connect :" .$con->connect_error);
  }else{
    $stmt = $con->prepare("select * from user_details where email = ?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if($data['passwd'] === $password) {
         echo"<script>alert('login successfully'),window.location='home.php';</script>   ";
         $_SESSION['email'] = $email;
        }else{
          
         echo"<script>alert('Invalid Email or Password'),window.location='login.html';</script> ";
        }
    }else {
      echo "<script>alert('Invalid Email or Password'),window.location='login.html';</script>";
    }
  }
?>
