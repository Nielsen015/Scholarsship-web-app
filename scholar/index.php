<?php
include('security.php');
include('log.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
date_default_timezone_set('Africa/Nairobi');
$currentTime = date( 'd-m-Y h:i:s A', time () );
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="../index" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="	fas fa-globe fa-sm text-white-50 "></i> Go to Website</a>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- users number Card -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="users" style="text-decoration: none;color:#24306e;">Total registered Users</a></div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
             $query = "SELECT id FROM users ORDER BY id";  
             $query_run = mysqli_query($connection, $query);
             $row = mysqli_num_rows($query_run);
             echo '<h2> '.$row.'</h2>';
            
              ?>

              </div>
            </div>
            <div class="col-auto" text-align="center;">
              <i class="fa fa-users fa-3x text-gray-400 center"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Scholarship number Card  -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="#" style="text-decoration: none;color:#24306e;">Total Number of Scholarships</a></div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
             $query = "SELECT id FROM scholarships ORDER BY id";  
             $query_run = mysqli_query($connection, $query);
             $row = mysqli_num_rows($query_run);
             echo '<h2> '.$row.'</h2>';
            
              ?>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user-graduate fa-3x text-gray-400"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Admin Number Card  -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="admin" style="text-decoration: none;color:#24306e;">Total Admin users</a></div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
             $query = "SELECT id FROM admin ORDER BY id";  
             $query_run = mysqli_query($connection, $query);
             $row = mysqli_num_rows($query_run);
             echo '<h2> '.$row.'</h2>';
            
              ?>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user fa-3x text-gray-400"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Notification Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2"> <a href="#" class="text-uppercase" style="font-size:10px;text-decoration: none;color:#24306e"><b>Refund Panel</b></a><br>
              <div class="text-xs font-weight-bold text-dark text-uppercase mb-1"><a style="text-decoration: none;color:#FF7E01" href="pending">Pending <span class="badge badge-warning badge-counter">
                           <!-- checking for pending refunds -->
                           <?php
                            $status="closed";
                            $query = "SELECT * FROM refunds where status='$status'";
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            {?>
                                
											<b class="label orange pull-right"><?php echo $row; ?></b>
											<?php } ?></span></a></div>
              <div class="text-xs font-weight-bold text-dark text-uppercase mb-1"><a style="text-decoration: none;color:#1D7044" href="approved">Approved <span class="badge badge-success badge-counter">
                           <!-- checking for approved refunds -->
                           <?php
                            $status="closed";
                            $query = "SELECT * FROM refunds where status='$status'";
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            {?>
                                
											<b class="label orange pull-right"><?php echo $row; ?></b>
											<?php } ?></span></a></div>
              <div class="text-xs font-weight-bold text-dark text-uppercase mb-1"><a style="text-decoration: none;color:#C91414" href="declined">Declined <span class="badge badge-danger badge-counter">
                           <!-- checking for decliend refunds -->
                           <?php
                            $status="declined";
                            $query = "SELECT * FROM refunds where status='$status'";
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            {?>
                                
											<b class="label orange pull-right"><?php echo $row; ?></b>
											<?php } ?></span></a></div>

              <div class="h5 mb-0 font-weight-bold text-gray-800">

              </div>
            </div>
            <div class="col-auto">
              <i class="fa fa-redo fa-3x text-gray-400"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
</div>

  <!-- Content Row -->








  <?php
include('includes/scripts.php');
?>