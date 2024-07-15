
<?php
session_start();
include('includes/header.php');
//include('includes/navbar.php');
?>
<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3"> 
		<h6 class="m-0 font-weight-bold text-primary">EDIT machinery booking details</h6>
			
		</div>
		<div class="card-body">
<?php	
$connection=mysqli_connect("localhost","root","areca","arecanutmanagement");		
if(isset($_POST['edit_btn']))
{
    $mbid=$_POST['edit_id'];
    
    $query="select * from machine_booking where bookingid='$mbid' ";
    $query_run=mysqli_query($connection,$query);
    foreach ($query_run as $row )
     {
        ?>
        <form action="code.php" method="POST">

        	<input type="hidden" name="edit_id" value="<?php echo $row['bookingid']?>">

			<div class="form-group">
                <label> customerid </label>
                <input type="text" name="edit_customerid" value="<?php echo $row['userid']?>" class="form-control" placeholder="Enter customerid">
            </div>
            <div class="form-group">
                <label>machineid</label>
                <input type="machineid" name="edit_machineid" value="<?php echo $row['machineid']?>" class="form-control" placeholder="Enter machineid">
        
            </div>
            <div class="form-group">
                <label>rate</label>
                <input type="rate" name="edit_rate" value="<?php echo $row['rate']?>" class="form-control" placeholder="Enter rate">
            </div>

            <div class="form-group">
                <label>booked_date</label>
                <input type="booked_date" name="edit_booked_date" value="<?php echo $row['booked_date']?>" class="form-control" placeholder="Enter booked_date">
            </div>

            <div class="form-group">
                <label>service_date</label>
                <input type="service_date" name="edit_service_date" value="<?php echo $row['service_date']?>" class="form-control" placeholder="Enter service_date">
            </div>

              <a href="mbooking.php" class="btn btn-danger">Cancel</a>
             <button type="submit" name="mbupdatebtn" class="btn btn-primary">Update</button>
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