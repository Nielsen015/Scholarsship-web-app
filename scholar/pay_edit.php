<?php
include('security.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h5 class="m-0 font-weight-bold text-primary">Edit Tenant Payment Data</h5>
  </div>
  <div class="card-body">
      <?php 
  if(isset($_POST['edit_paybtn']))
 {
     $id = $_POST['edit_pay'];

     $query = "SELECT * FROM payment WHERE transact_id='$id' ";
     $query_run = mysqli_query($connection, $query);

     foreach($query_run as $row) 
     {
       ?>

        <form action="code.php" method="POST">
            <input type="hidden" name="edit_pay" value="<?php echo $row['transact_id'] ?>" >
            <div class="form-group">
                <label>Balance</label>
                <input type="number" name="edit_balance" value="<?php echo $row['balance'] ?>" class="form-control" placeholder="Enter Amount">
            </div>
            <div class="form-group">
                <label>mode</label>
                <input type="text" name="edit_mode" value="<?php echo $row['mode'] ?>" class="form-control" placeholder="Enter Mode of Payment e.g. M-pesa">
            </div>
                <a href="payments" class="btn btn-danger">Cancel</a>
                <button type="submit" name="update_paybtn" class="btn btn-success">Update</button>

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