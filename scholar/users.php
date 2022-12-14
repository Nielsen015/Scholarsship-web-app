<?php
include('security.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Registered Users
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

    <?php
    $sr_no=1;
        $query = "SELECT * FROM users";
        $query_run = mysqli_query($connection,$query);

    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>First Name </th>
            <th>Last Name</th>
            <th>Username</th>
            <th> Email</th>
            <th>Status</th>
            <th>Action</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if(mysqli_num_rows($query_run) > 0)
          {
            while($row = mysqli_fetch_assoc($query_run))
            {
             ?>

          
          <tr>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php 
                    $main_results=$row['status'];
                    if($main_results=='active')
                    { ?>
                      <p style="color:#1cc88a;">Active</p> 
                    <?php }
                  if($main_results=="inactive"){ ?>
                  <p style="color:#e74a3b;">Inactive</p>
                  <?php } ?></td>
            <td>
            <form action="user_activate.php" method="post">
                <?php 
                    $main_result=$row['status'];
                    if($main_result=='active')
                    { ?>
                  <input type="hidden" name="deactivate_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="deactivate_btn" class="btn btn-danger">Deactivate</button>
                  <?php }
                   if($main_result=="inactive"){ ?>
                   <input type="hidden" name="activate_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="activate_btn" class="btn btn-success">Activate</button>
                  <?php } ?>
                </form>
            </td>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_user" value="<?php echo $row['id']; ?>">
                <button type="submit" name="delete_userbtn"class="btn btn-danger">Delete</button>
            </form>
            </td>
          </tr>
          <?php
            }
          } 
          else{
            echo "No Record Found";
          }
          ?>
        
        </tbody>
      </table>

    </div>
  </div>
</div>



<?php
include('includes/scripts.php');
?>