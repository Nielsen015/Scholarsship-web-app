<?php
include('security.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Your Notification Panel
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

    <?php
        $query = "SELECT m.*,u.* from messages m,users u where m.username=u.username";
       $query_run = mysqli_query($connection,$query);

    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Sender</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message Status</th>
           
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
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['subject']; ?></td>
            <td><?php 
                    $main_result=$row['state'];
                    if($main_result==1)
                    { ?>
                     <p style="color:#1cc88a;">Read</p>
                    <?php }
                  if($main_result=="0"){ ?>
                    <p style="color:#e74a3b;">Not Read</p>
                  <?php } ?></td>
            
            <td><a href="notification_read? id_no=<?php echo $row['id_no'];?>">
              <button type="button" class="btn btn-info">Read</button></a>
            </td>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_alert" value="<?php echo $row['id_no']; ?>">
                <button type="submit" name="delete_alertbtn"class="btn btn-danger">Delete</button>
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



<?php
include('includes/scripts.php');
?>