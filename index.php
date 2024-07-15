<?php 
   include('security.php');
   include('includes/header.php');
   include('includes/navbar.php');

?>
       
        
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Registered Admin</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php

                                                  $connection=mysqli_connect("localhost","root","areca","arecanutmanagement");
                                                 $query="select adminid from admin_details order by adminid";
                                                 $query_run=mysqli_query($connection,$query);
                                                  $row=mysqli_num_rows($query_run);

                                                  echo '<h1>' .$row. '</h1>' ;
                                                ?>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total no of workers</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php

                                                  $connection=mysqli_connect("localhost","root","areca","arecanutmanagement");
                                                 $query="select wid from workers order by wid";
                                                 $query_run=mysqli_query($connection,$query);
                                                  $row=mysqli_num_rows($query_run);

                                                  echo '<h1>' .$row. '</h1>' ;
                                                ?>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Totl number of purchase</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php

                                                  $connection=mysqli_connect("localhost","root","areca","arecanutmanagement");
                                                 $query="select purchaseid from purchase order by purchaseid";
                                                 $query_run=mysqli_query($connection,$query);
                                                  $row=mysqli_num_rows($query_run);

                                                  echo '<h1>' .$row. '</h1>' ;
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Totl number of machinery booking</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php

                                                  $connection=mysqli_connect("localhost","root","areca","arecanutmanagement");
                                                 $query="select bookingid from machine_booking order by bookingid";
                                                 $query_run=mysqli_query($connection,$query);
                                                  $row=mysqli_num_rows($query_run);

                                                  echo '<h1>' .$row. '</h1>' ;
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pending Requests Card Example -->
                       <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Totl number of sales</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php

                                                  $connection=mysqli_connect("localhost","root","areca","arecanutmanagement");
                                                 $query="select salesid from sales order by salesid";
                                                 $query_run=mysqli_query($connection,$query);
                                                  $row=mysqli_num_rows($query_run);

                                                  echo '<h1>' .$row. '</h1>' ;
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


    </div>    

    
   <?php
       
   include('includes/scripts.php');
   //include('includes/footer.php'); 

   ?>