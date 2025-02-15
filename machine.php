
<?php
session_start();
include('includes/header.php');
//include('includes/navbar.php');
?>

<div class="modal fade" id="machinedetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add machine Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST" enctype="multipart/form-data">

        <div class="modal-body">
            
            <div class="form-group">
                <label>machineid</label>
                <input type="text" name="name" class="form-control" placeholder="Enter machineid">
            </div>

            
           
            <div class="form-group">
                <label>name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label>rate</label>
                <input type="text" name="rate" class="form-control" placeholder="enter rate">
            </div>
             <div class="form-group">
                <label>image</label>
                <input type="file" name="image" id="image" class="form-control" placeholder="enter rate">
            </div>

            

           


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="mbtn" class="btn btn-primary">Save</button>
        </div>
      </form>
        
    </div>
  </div>
</div>

<div class="container-fluid">
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">machinery details
        
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#machinedetails">
       Add machinery details
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
      $query="select * from machine";
      $query_run=mysqli_query($connection,$query);
    ?>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>machineid</th>
                <th>name</th>
                <th>rate</th>
                <th>image</th>

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
                <td><?php echo $row['machineid']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['amt']?></td>
                
                <td><?php echo '<img src="img/'.$row['image'].' " width="100px" height="100px" >'?></td>
                
                <td>
                    <form action="machine_edit.php" method="POST">
                        <input type="hidden" name="edit_id" value="<?php echo $row['machineid'];?>">
                       <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
                    </form>
                </td>
                <td>
                    <form action="code.php" method="POST">  
                    <input type="hidden" name="delete_id" value="<?php echo $row['machineid'];?>">  
                    <button type="submit" name="mdeletebtn" class="btn btn-danger">DELETE</button>
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