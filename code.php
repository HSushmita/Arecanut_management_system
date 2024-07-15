<?php
session_start();
//include('includes/header.php');
//include('includes/navbar.php');
$connection=mysqli_connect("localhost","root","areca","arecanutmanagement");

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    $email_query = "SELECT * FROM admin_details WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');  
    }
    else
    {
        if($password === $cpassword)
        {
            $query = "INSERT INTO admin_details (admin_name,email,passwd) VALUES ('$username','$email','$password')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Admin Profile Added";
               // $_SESSION['status_code'] = "success";
                header('Location: register.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
               // $_SESSION['status_code'] = "error";
                header('Location: register.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
           // $_SESSION['status_code'] = "warning";
            header('Location: register.php');  
        }
    }

}


if(isset($_POST['updatebtn']))
{
    $adminid=$_POST['edit_adminid'];
    $admin_name=$_POST['edit_username'];
    $email=$_POST['edit_email'];
    $passwd=$_POST['edit_password'];

    $query="update admin_details set admin_name='$admin_name',email='$email',passwd='$passwd' where adminid='$adminid'";

    $query_run=mysqli_query($connection,$query);
    if($query_run)
    {
      $_SESSION['success']="your data is updated";
      header('location:register.php');
    }
     else
     {
       
      $_SESSION['status']="your data is not updated";
      header('location:register.php');     
     }
}



if(isset($_POST['delete_btn']))
{
    $id=$_POST['delete_id'];
    $query="delete  from admin_details where adminid='$id'";
    $query_run=mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success']="your data is deleted";
        header('location:register.php');
    }
    else
    {
        $_SESSION['status']="your data is not deleted";
        header('location:register.php');
    }
}






 

    if(isset($_POST['login_btn']))
{
    $username = $_POST['admin_name']; 
    $password_login = $_POST['password']; 

    $query = "SELECT * FROM admin_details WHERE admin_name='$username' AND passwd='$password_login' ";
    $query_run = mysqli_query($connection, $query);

   if(mysqli_fetch_array($query_run))
   {
        $_SESSION['admin_name'] = $username;
        header('Location: index.php');
   } 
   else
   {
        $_SESSION['status'] = "Invalid name / password";
        header('Location: login.php');
   }
    
}
 


if(isset($_POST['purchasebtn']))
{
    $pid = $_POST['purchaseid'];
    
    $prid = $_POST['productid'];
    $idate = $_POST['invoicedate'];
    $tamt = $_POST['totalamt'];
    $tqty = $_POST['totalqty'];
    $sid = $_POST['sid'];

    $email_query = "SELECT * FROM purchase WHERE purchaseid='$pid' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = " Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: purchase.php');  
    }
    else
    {
            $query = "INSERT INTO purchase (purchaseid,productid,idate,totalamt,totalqty,userid) VALUES ('$pid',$prid','$idate','$tamt','$tqty','$sid')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "purchase details Added";
               // $_SESSION['status_code'] = "success";
                header('Location: purchase.php');
            }
            else 
            {
                $_SESSION['status'] = "purchase details Not Added";
               // $_SESSION['status_code'] = "error";
                header('Location: purchase.php');  
            }
        
    }

}

if(isset($_POST['pupdatebtn']))
{
    $purchaseid=$_POST['edit_purchaseid'];
    
    $productid=$_POST['edit_productid'];
    $idate=$_POST['edit_idate'];
    $totalamt=$_POST['edit_totalamt'];
    $totalqty=$_POST['edit_totalqty'];
    $sid=$_POST['edit_sid'];

    $query="update purchase set productid='$productid',idate='$idate',totalamt='$totalamt',totalqty='$totalqty',userid='$sid' where purchaseid='$purchaseid'";

    $query_run=mysqli_query($connection,$query);
    if($query_run)
    {
      $_SESSION['success']="your data is updated";
      header('location:purchase.php');
    }
     else
     {
       
      $_SESSION['status']="your data is not updated";
      header('location:purchase.php');     
     }
}


if(isset($_POST['pdelete_btn']))
{
    $purchaseid=$_POST['delete_id'];
    $query="delete  from purchase where purchaseid='$purchaseid'";
    $query_run=mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success']="your data is deleted";
        header('location:purchase.php');
    }
    else
    {
        $_SESSION['status']="your data is not deleted";
        header('location:purchase.php');
    }
}


if(isset($_POST['salesbtn']))
{
    $sid = $_POST['salesid'];
    
    $prid = $_POST['productid'];
    $sdate = $_POST['sdate'];
    $tamt = $_POST['totalamt'];
    $tqty = $_POST['totalqty'];
    $cid = $_POST['customerid'];

    $email_query = "SELECT * FROM sales WHERE salesid='$sid' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = " Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: sales.php');  
    }
    else
    {
            $query = "INSERT INTO sales (salesid,productid,sdate,totalamt,totalqty,userid) VALUES ('$sid',$prid','$sdate','$tamt','$tqty','$cid')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "sales details Added";
               // $_SESSION['status_code'] = "success";
                header('Location: sales.php');
            }
            else 
            {
                $_SESSION['status'] = "sales details Not Added";
               // $_SESSION['status_code'] = "error";
                header('Location: sales.php');  
            }
        
    }

}

if(isset($_POST['supdatebtn']))
{
    $salesid=$_POST['edit_salesid'];
    
    $productid=$_POST['edit_productid'];
    $sdate=$_POST['edit_sdate'];
    $totalamt=$_POST['edit_totalamt'];
    $totalqty=$_POST['edit_totalqty'];
    $cid=$_POST['edit_customerid'];

    $query="update sales set productid='$productid',sdate='$sdate',totalamt='$totalamt',totalqty='$totalqty',userid='$cid' where salesid='$salesid'";

    $query_run=mysqli_query($connection,$query);
    if($query_run)
    {
      $_SESSION['success']="your data is updated";
      header('location:sales.php');
    }
     else
     {
       
      $_SESSION['status']="your data is not updated";
      header('location:sales.php');     
     }
}


if(isset($_POST['sdelete_btn']))
{
    $salesid=$_POST['delete_id'];
    $query="delete  from sales where salesid='$salesid'";
    $query_run=mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success']="your data is deleted";
        header('location:sales.php');
    }
    else
    {
        $_SESSION['status']="your data is not deleted";
        header('location:sales.php');
    }
}










if(isset($_POST['mbbtn']))
{
    $bid = $_POST['bookingid'];
    $cid = $_POST['customerid'];
    $mid = $_POST['machineid'];
    $rate = $_POST['rate'];
    $bdate = $_POST['booked_date'];
    $sdate = $_POST['service_date'];
    

    $email_query = "SELECT * FROM machine_booking WHERE machineid='$mid' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = " Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: mbooking.php');  
    }
    else
    {
            $query = "INSERT INTO machine_booking (bookingid,userid,machineid,rate,booked_date,service_date) VALUES ('$bid','$cid','$mid','$rate','$bdate','$sdate')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "machine booking details Added";
               // $_SESSION['status_code'] = "success";
                header('Location: mbooking.php');
            }
            else 
            {
                $_SESSION['status'] = "machine booking details Not Added";
               // $_SESSION['status_code'] = "error";
                header('Location: mbooking.php');  
            }
        
    }

}

if(isset($_POST['mbupdatebtn']))
{
    $bid=$_POST['edit_id'];
    $cid=$_POST['edit_customerid'];
    $mid=$_POST['edit_machineid'];
    $rate=$_POST['edit_rate'];
    $bdate=$_POST['edit_booked_date'];
    $sdate=$_POST['edit_service_date'];
    
    //$cid=$_POST['edit_customerid'];

    $query="update machine_booking set userid='$cid',machineid='$mid',rate='$rate',booked_date='$bdate',service_date='$sdate' where bookingid='$bid'";

    $query_run=mysqli_query($connection,$query);
    if($query_run)
    {
      $_SESSION['success']="your data is updated";
      header('location:mbooking.php');
    }
     else
     {
       
      $_SESSION['status']="your data is not updated";
      header('location:mbooking.php');     
     }
}


if(isset($_POST['mbdelete_btn']))
{
    $salesid=$_POST['delete_id'];
    $query="delete  from machine_booking where bookingid='$bid'";
    $query_run=mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success']="your data is deleted";
        header('location:mbooking.php');
    }
    else
    {
        $_SESSION['status']="your data is not deleted";
        header('location:mbooking.php');
    }
}





if(isset($_POST['wbtn']))
{
    $wid = $_POST['wid'];
    $wname = $_POST['name'];
    $add = $_POST['adress'];
    $pn = $_POST['number'];
    $sal = $_POST['salary'];
  

    $query = "SELECT * FROM workers WHERE wid='$wid' ";
    $query_run = mysqli_query($connection, $query);
    if(mysqli_num_rows($query_run) > 0)
    {
        $_SESSION['status'] = " Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: workers.php');  
    }
    else
    {
            $query = "INSERT INTO workers (wid,wname,address,phno,salary) VALUES ('$sid','$wname','$add','$pn','$sal')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "workers details Added";
               // $_SESSION['status_code'] = "success";
                header('Location: workers.php');
            }
            else 
            {
                $_SESSION['status'] = "workers details Not Added";
               // $_SESSION['status_code'] = "error";
                header('Location: workers.php');  
            }
        
    }

}

if(isset($_POST['wupdatebtn']))
{
    $salesid=$_POST['edit_wid'];
    $invoiceid=$_POST['edit_name'];
    $productid=$_POST['edit_address'];
    $sdate=$_POST['edit_phno'];
    $totalamt=$_POST['edit_salary'];
   

    $query="update workers set wname='$invoiceid',address='$productid',phno='$sdate',salary='$totalamt' where wid='$salesid'";

    $query_run=mysqli_query($connection,$query);
    if($query_run)
    {
      $_SESSION['success']="your data is updated";
      header('location:workers.php');
    }
     else
     {
       
      $_SESSION['status']="your data is not updated";
      header('location:workers.php');     
     }
}


if(isset($_POST['wdelete_btn']))
{
    $salesid=$_POST['delete_id'];
    $query="delete  from workers where wid='$salesid'";
    $query_run=mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success']="your data is deleted";
        header('location:workers.php');
    }
    else
    {
        $_SESSION['status']="your data is not deleted";
        header('location:workers.php');
    }
}








if(isset($_POST['mbtn']))
{
    $wid = $_POST['mid'];
    $wname = $_POST['name'];
    $add = $_POST['rate'];
    $img=$_FILES['image']['name'];
  
  

    $query = "SELECT * FROM machine WHERE machineid='$wid' ";
    $query_run = mysqli_query($connection, $query);
    if(mysqli_num_rows($query_run) > 0)
    {
        $_SESSION['status'] = " Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: machine.php');  
    }
    else
    {
            $query = "INSERT INTO machine (machineid,name,amt,image) VALUES ('$wid','$wname','$add','$img')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "machine details Added";
               // $_SESSION['status_code'] = "success";
                header('Location: machine.php');
            }
            else 
            {
                $_SESSION['status'] = "machine details Not Added";
               // $_SESSION['status_code'] = "error";
                header('Location: machine.php');  
            }
        
    }

}

if(isset($_POST['mupdatebtn']))
{
    $salesid=$_POST['edit_mid'];
    $invoiceid=$_POST['edit_name'];
    $productid=$_POST['edit_rate'];
    $imge=$_FILES['edit_img']['name'];
    
   

    $query="update machine set name='$invoiceid',amt='$productid',image='$imge' where machineid='$salesid'";

    $query_run=mysqli_query($connection,$query);
    if($query_run)
    {
      $_SESSION['success']="your data is updated";
      header('location:machine.php');
    }
     else
     {
       
      $_SESSION['status']="your data is not updated";
      header('location:machine.php');     
     }
}


if(isset($_POST['mdeletebtn']))
{
    $salesid=$_POST['delete_id'];
    $query="delete  from machine where machineid='$salesid'";
    $query_run=mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success']="your data is deleted";
        header('location:machine.php');
    }
    else
    {
        $_SESSION['status']="your data is not deleted";
        header('location:machine.php');
    }
}











if(isset($_POST['catbtn']))
{
    $wid = $_POST['productid'];
    $wname = $_POST['category'];
    $add = $_POST['name'];
    $amt = $_POST['rate'];
  
  

    $query = "SELECT * FROM category WHERE productid='$wid' ";
    $query_run = mysqli_query($connection, $query);
    if(mysqli_num_rows($query_run) > 0)
    {
        $_SESSION['status'] = " Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: cat.php');  
    }
    else
    {
            $query = "INSERT INTO category (productid,category,name,rate) VALUES ('$wid','$wname','$add',$amt)";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "category details Added";
               // $_SESSION['status_code'] = "success";
                header('Location: cat.php');
            }
            else 
            {
                $_SESSION['status'] = "category details Not Added";
               // $_SESSION['status_code'] = "error";
                header('Location: cat.php');  
            }
        
    }

}

if(isset($_POST['catupdatebtn']))
{
    $salesid=$_POST['edit_mid'];
    $invoiceid=$_POST['edit_name'];
    $productid=$_POST['edit_aname'];
      $prod=$_POST['edit_rate'];
    
   

    $query="update category set category='$invoiceid',name='$productid',rate=' $prod' where productid='$salesid'";

    $query_run=mysqli_query($connection,$query);
    if($query_run)
    {
      $_SESSION['success']="your data is updated";
      header('location:cat.php');
    }
     else
     {
       
      $_SESSION['status']="your data is not updated";
      header('location:cat.php');     
     }
}


if(isset($_POST['catdelete_btn']))
{
    $salesid=$_POST['delete_id'];
    $query="delete  from category where productid='$salesid'";
    $query_run=mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success']="your data is deleted";
        header('location:cat.php');
    }
    else
    {
        $_SESSION['status']="your data is not deleted";
        header('location:cat.php');
    }
}
?>





