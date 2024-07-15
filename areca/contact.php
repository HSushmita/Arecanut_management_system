<?php

  if (isset($_POST['submit'])) {
  	$name=$_POST['name'];
  	$subject = $_POST['subject'];
  	$email = $_POST['email'];
  	$message = $_POST['message'];
     
     $to_email = "sushmitahegde2000@gmail.com";
     $headers = "From: ".$email;
     $txt = "you have received an email from ".$name.".\n\n".$message;
  	mail($to_email, $subject,$txt,$headers);
  	
  }
?>