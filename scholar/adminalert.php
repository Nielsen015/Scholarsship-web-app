<?php
include('security.php'); 
include('includes/header.php'); 
include('includes/navbar.php');
date_default_timezone_set('Africa/Nairobi');
$currentTime = date( 'd-m-Y h:i:s A', time () );
?>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Admin Community Notification Panel
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

    <?php
    $sr_no=1;
        $query = "SELECT c.*, a.* FROM admincast c, admin a where a.email='".$_SESSION['email']."' and c.receiver=a.username";
        $query_run = mysqli_query($connection,$query);

    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Sender</th>
            <th>Date sent</th>
            <th>Subject</th>
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
            <td><?php echo $row['sender']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['subject']; ?></td>
            <td><a href="alert_read.php? id_no=<?php echo $row['id_no'];?>">
<button type="button" class="btn btn-info">Read</button></a>
            </td>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_adminalert" value="<?php echo $row['id_no']; ?>">
                <button type="submit" name="delete_adminalertbtn"class="btn btn-danger">Delete</button>
            </form>
            </td>
          </tr>
          <?php
            }
          } 
          else{
            echo '<p style="color:#e74a3b;">No Messages found</p>';
          }
          ?>
        
        </tbody>
      </table>

    </div>
  </div>
</div>
<br>
<br>



<?php
include('includes/scripts.php');
?>