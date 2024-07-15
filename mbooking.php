
<?php
include('security.php');
include('includes/header.php');
//include('includes/navbar.php');
?>


<div class="container-fluid">
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">purchase details
        
      </h6>
    </div>      


<div class="card-body">
    
<div class="table-responsive">
    <?php
    $connection=mysqli_connect("localhost","root","areca","arecanutmanagement");
      $query="select * from purchaselist";
      $query_run=mysqli_query($connection,$query);
    ?>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>purchaseid</th>
                
                <th>category</th>
                <th>user name</th>
                
                <th>sales date</th>
                <th>totalamt</th>
                <th>totalqty</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
              if(mysqli_num_rows($query_run)>0)
              {
                while ($row=mysqli_fetch_array($query_run)) 
                {
               
                 ?>
            <tr>
                <td><?php echo $row['purchaseid']?></td>
                <td><?php echo $row['category']?></td>
                <td><?php echo $row['fullname']?></td>
                
                <td><?php echo $row['idate']?></td>
                <td><?php echo $row['totalamt']?></td>
                <td><?php echo $row['totalqty']?></td>
                
            </tr>
            <?php
              }
            }
            else{
                echo "no record found";
            }
            ?>
        </tbody>
        
    </table>
    <a href="index.php">Home</a>
</div>
</div>
</div>
</div>

<?php
 include('includes/scripts.php');
 //include('includes/footer.php');
?>