<?php
include('security.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="firstname" class="form-control" placeholder="Enter First Name" required>
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="lastname" class="form-control" placeholder="Enter Last Name" required>
            </div>
            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                <small class="error_email" style="color:red;"></small>
            </div>
            <div class="form-group">
                <label>Default Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
            </div>
            <div class="form-group">
                <label>Confirm Default Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" required>
            </div>
            <label>Role:</label>
          <select id="role" name="role" class="form-control" required>
              <option value="" selected="selected" class="form-control" disabled="">Select admin role</option>
              <option value="super">Super Admin</option>
              <option value="admin">Service Admin</option>
          </select>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-success">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Admin Users 
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addadminprofile">
              Add Admin User 
            </button>
    </h6>
  </div>

  <div class="card-body">


    <div class="table-responsive">

    <?php
        $query = "SELECT * FROM admin";
        $query_run = mysqli_query($connection,$query);

    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> Username </th>
            <th>Email </th>
            <th>Level</th>
            <th>Status</th>
            <th>Action</th>
            <th>Action </th>
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
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['role']; ?></td>
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
                <form action="admin_activate.php" method="post">
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
                <form action="edit" method="post">
                  <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="edit_btn" class="btn btn-success">Edit</button>
                </form>
            </td>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                <button type="submit" name="delete_btn"class="btn btn-danger">Delete</button>
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
        </div>
        </div>


<?php
include('includes/scripts.php');
?>