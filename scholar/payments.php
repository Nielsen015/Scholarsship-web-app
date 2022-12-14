<?php
include('security.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Users Payment Data 
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

    <?php
    $sr_no=1;
        $query = "SELECT * FROM payment";
        $query_run = mysqli_query($connection,$query);

    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Username</th>
            <th>Balance</th>
            <th>Platform</th>
            <th>last Top up</th>
            <th>Payment Number</th>
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
            <td><?php echo $row['username']; ?></td>
            <td><button type="button" class="btn btn-success">Ksh <?php echo $row['balance']; ?></button></td>
            <td><p style="color:#e74a3b;"><?php echo $row['mode']; ?></p></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['phone']; ?></td>
       
            <td>
                <form action="pay_edit.php" method="post">
                  <input type="hidden" name="edit_pay" value="<?php echo $row['transact_id']; ?>">
                  <button type="submit" name="edit_paybtn" class="btn btn-success">Edit</button>
                </form>
            </td>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_payment" value="<?php echo $row['transact_id']; ?>">
                <button type="submit" name="delete_paybtn"class="btn btn-danger">Delete</button>
            </form>
            </td>
          </tr>
          <?php
            }
          } 
          else{
            echo '<p style="color:#e74a3b;">No Record(s) found</p>';
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