<?php
include('security.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
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
?> <div class="container">
<div class="content">
  <div class="left-side-center">
    <img src="images/Clog.jpg" style="height: 295px;width:295px;border-top-left-radius: 50% 50%;border-top-right-radius: 50% 50%;border-bottom-right-radius: 50% 50%;border-bottom-left-radius: 50% 50%;" alt="logo"y>
    
  </div>
  <div class="right-side">
    <div class="topic-text">Broadcast message Panel</div>
    <p>This is a broadcast Message panel, the message sent will be received by all Tenants registered.</p>
  <form action="send.php" method="POST">
    <div class="input-box">
      <input type="text" name="subject" id="subject" placeholder="Subject">
    </div>
    <div class="input-box message-box">
      <textarea name="messages" id="messages" placeholder="Enter your message"></textarea>
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
