<?php
include('security.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
date_default_timezone_set('Africa/Nairobi');
$currentTime = date( 'd-m-Y h:i:s A', time () );
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta charset="UTF-8">
  <head>
    <link rel="stylesheet" href="css/chat.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<div class="container">
<div class="content">
  <div class="left-side-center">
    <img src="images/logo.png" style="height: 295px;width:295px;" alt="logo">
    
  </div>
  <div class="right-side">
    <div class="topic-text">Admin message Panel</div>
    <p>Send admin Users information to keep them update to date or give guidance.</p>
  <form action="admincaster_code.php" method="POST">
    <div class="input-box">
    <div class="form-group">
    <label>Receiver:</label>
<select id="username" name="username" class="form-control" required>
    <option value="" selected="selected" class="form-control" disabled="">Select admin username</option>
    <?php
    $query = "SELECT username FROM admin where email!='".$_SESSION['email']."'";
    $query_run = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_array($query_run)) {
        echo "<option value='".$row['username']."'>".$row['username']."</option>";
    }

?>
</select>
</div>
    </div>
    <br> 
    <div class="input-box">
      <input type="text" name="subject" id="subject" placeholder="Subject" required>
    </div>
    <div class="input-box" style="display: none;">
    <?php
    $query = "SELECT username FROM admin where email='".$_SESSION['email']."'";
    $query_run = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_array($query_run)) {
      ?>
         <input type="hidden" name="sender" value="<?php echo $row['username']; ?>">;
    <?php } ?>
    </div>
    <div class="input-box message-box">
      <textarea name="messages" id="messages" placeholder="Enter your message" required="required"></textarea>
    </div>
    <div class="button">
      <input type="submit"  name="submit" class="btn btn-primary" value="Send" >
    </div>
  </form>
</div>
</div>
</div>
</body>
</html>
<?php
include('includes/scripts.php');
?>
