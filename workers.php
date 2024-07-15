
<?php
include('security.php');
include('includes/header.php');
//include('includes/navbar.php');
?>

<div class="modal fade" id="workersdetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add workers Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">
            

            
            <div class="form-group">
                <label>name</label>
                <input type="text" name="name" class="form-control"
                placeholder="Enter name">
            
            </div>
            <div class="form-group">
                <label>adress</label>
                <input type="text" name="adress" class="form-control" placeholder="Enter adress">
            </div>
            <div class="form-group">
                <label>contact number</label>
                <input type="text" name="number" class="form-control" placeholder="number">
            </div>

            <div class="form-group">
                <label>salary</label>
                <input type="text" name="salary" class="form-control" placeholder="salary">
            </div>

           


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="wbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>

<div class="container-fluid">
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">worker details
        
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#workersdetails">
       Add worker details
</button>
      </h6>
    </div>      


<div class="card-body">
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
    
<div class="table-responsive">
    <?php
    $connection=mysqli_connect("localhost","root","areca","arecanutmanagement");
      $query="select * from workers";
      $query_run=mysqli_query($connection,$query);
    ?>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>workerid</th>
                <th>worker name</th>
                <th>address</th>
                <th>contact number</th>
                <th>salary</th>

                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <tbody>
            <?php
              if(mysqli_num_rows($query_run)>0)
              {
                while ($row=mysqli_fetch_assoc($query_run)) 
                {
               
                 ?>
            <tr>
                <td><?php echo $row['wid']?></td>
                <td><?php echo $row['wname']?></td>
                <td><?php echo $row['address']?></td>
                <td><?php echo $row['phno']?></td>
                <td><?php echo $row['salary']?></td>
                
                <td>
                    <form action="worker_edit.php" method="POST">
                        <input type="hidden" name="edit_id" value="<?php echo $row['wid'];?>">
                       <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
                    </form>
                </td>
                <td>
                    <form action="code.php" method="POST">  
                    <input type="hidden" name="delete_id" value="<?php echo $row['wid'];?>">  
                    <button type="submit" name="wdelete_btn" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
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