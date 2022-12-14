<?php
include('security.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h5 class="m-0 font-weight-bold text-primary">Edit Admin Profile</h5>
  </div>
  <div class="card-body">
      <?php 
  if(isset($_POST['edit_btn']))
 {
     $id = $_POST['edit_id'];

     $query = "SELECT * FROM admin WHERE id='$id' ";
     $query_run = mysqli_query($connection, $query);

     foreach($query_run as $row) 
     {
       ?>

        <form action="code.php" method="POST">
            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="edit_first" value="<?php echo $row['firstname'] ?>" class="form-control" placeholder="Enter First Name" required>
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="edit_last" value="<?php echo $row['lastname'] ?>" class="form-control" placeholder="Enter Last Name" required>
                </div>
                <div class="form-group">
                    <label> Username </label>
                    <input type="text" name="edit_username" value="<?php echo $row['username'] ?>" class="form-control" placeholder="Enter Username" required>
                </div>
                <label>Role:</label>
          <select id="role" name="role" class="form-control" required>
              <option value="<?php echo $row['role']; ?>" selected="selected" class="form-control"><?php echo $row['role']; ?></option>
              <option value="super">Super Admin</option>
              <option value="admin">Service Admin</option>
          </select>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="Enter Email" required>
                </div>
                
                <a href="admin" class="btn btn-danger">Cancel</a>
                <button type="submit" name="updatebtn" class="btn btn-success">Update</button>

        </form>

            <?php
     }
}
?>

            
    </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>