<?php
include('security.php'); 
date_default_timezone_set('Africa/Nairobi');
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['submit']))
{
$username=$_SESSION['username'];
$subject=mysqli_real_escape_string($connection,$_POST['subject']);
$content=mysqli_real_escape_string($connection,$_POST['message']);

$sql= "INSERT INTO messages(username,subject,content) values('$username','$subject','$content')";
$sql_run = mysqli_query($connection,$sql);
$query= "INSERT INTO send_history(username,subject,content) values('$username','$subject','$content')";
$query_run = mysqli_query($connection,$query);
 
if($query_run)
{
    $_SESSION['status'] = "Message has been sent";
    $_SESSION['status_code'] = "success";
    header('Location: message');

}
else
{
    $_SESSION['status'] = "Error! cannot send message, please contact Admin";
    $_SESSION['status_code'] = "error";
    header('Location: message');


}
}
?>