
<?php
session_start();
include('includes/header.php');
//include('includes/navbar.php');
?>
<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3"> 
		<h6 class="m-0 font-weight-bold text-primary">EDIT product details</h6>
			
		</div>
		<div class="card-body">
<?php	
$connection=mysqli_connect("localhost","root","areca","arecanutmanagement");		
if(isset($_POST['edit_btn']))
{
    $mid=$_POST['edit_id'];
    
    $query="select * from category where productid='$mid' ";
    $query_run=mysqli_query($connection,$query);
    foreach ($query_run as $row )
     {
        ?>
        <form action="code.php" method="POST">

        	<input type="hidden" name="edit_mid" value="<?php echo $row['productid']?>">

			<div class="form-group">
                <label> category</label>
                <input type="text" name="edit_name" value="<?php echo $row['category']?>" class="form-control" placeholder="Enter name">
            </div>
            
            <div class="form-group">

                <label> name</label>
                <input type="text" name="edit_aname" value="<?php echo $row['name']?>" class="form-control" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label> rate</label>
                <input type="text" name="edit_rate" value="<?php echo $row['rate']?>" class="form-control " placeholder="Enter rate">
        
            </div>
           

         
              <a href="category.php" class="btn btn-danger">Cancel</a>
             <button type="submit" name="catupdatebtn" class="btn btn-primary">Update</button>
        </form>
             <?php	
    }
}
?>
			
		</div>
		
	</div>
	
</div>

<?php
 include('includes/scripts.php');
 //include('includes/footer.php');
?>