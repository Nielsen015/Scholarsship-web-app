<?php
include('security.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
date_default_timezone_set('Africa/Nairobi');
$currentTime = date( 'd-m-Y h:i:s A', time () );
?>
<?php
if(isset($_GET['id_no']))
{
    $main_id = $_GET['id_no'];
}
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Messages
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

    <?php
        $query = "SELECT * FROM send_history WHERE id_no=$main_id";
        $query_run = mysqli_query($connection, $query);

    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Sender</th>
            <th>Message</th>
            <th>Date Sent</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
            while($main_result = mysqli_fetch_assoc($query_run))
            {
             ?>

          
          <tr>
            <td><?php echo $main_result['username']; ?></td>
            <td><?php echo $main_result['content']; ?></td>
            <td><?php echo $main_result['date']; ?></td>
            <td><a href="message_history"><p style="color:#1cc88a;">Back</p></a></td>

          </tr>
          <?php
            } 
          ?>
        
        </tbody>
      </table>

    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>