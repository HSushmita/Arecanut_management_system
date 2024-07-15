<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>purchase form</title>
    <style type="text/css">
        body{
            background: lightblue;
        }
        .contact-form{
            max-width: 350px;
            margin: auto;
            border-radius: 5px;
            padding: 20px;

        }
        input[type=text],select{
            width: 100%;
            padding: 12px 20px;
            display: inline-block;

        }
        button{
            background: blanchedalmond;
            width: 100%;
           padding: 14px 20px;
           margin: 8px 0;
           border: none;
        }
    </style>
</head>
<body>
   <div class="contact-form">
<?php
if (isset($_SESSION['success']) && $_SESSION['success']!='') {
           echo '<h2>'.$_SESSION['success'].'</h2>';
           unset($_SESSION['success']);
       }
       if (isset($_SESSION['status']) && $_SESSION['status']!='') {
           echo '<h2>'.$_SESSION['status'].'</h2>';
           unset($_SESSION['status']);
       }

       if (isset($_SESSION['status']) && $_SESSION['status']!='') {
           echo '<h2>'.$_SESSION['status'].'</h2>';
           unset($_SESSION['status']);
       }
       ?>
       <div>
         <?php
        $conn=mysqli_connect("localhost","root","areca","arecanutmanagement");
$query="select * from machine";
$query_run=mysqli_query($conn,$query);
?>
    <form action="book.php" method="post">
        <label for="name">your name</label>
        <input type="text" name="fullname">
        <label for="variety">machine name</label>
        <select type="text" id="variety" name="variety">
            <?php
            while ($r = mysqli_fetch_array($query_run)) {
                
            
            ?>
            <option value="variety"><?php echo $r['name'];?></option>
<?php
}
?>
      
        </select>

        <label for="rate"> rate</label>
        <select type="text" id="rate" name="rate">
<?php

            while ($r = mysqli_fetch_array($query_run)) {
                
            
            ?>
        <option><?php echo $r['amt'];?></option>
          <?php
    }
    ?>
    </select>
        
        <label>date</label>
        <input type="date" name="date">
         <button type="submit" name="submit">submit</button>    
    </form>
</div>
   </div>
</body>
</html>