<?php
include('security.php'); 
date_default_timezone_set('Africa/Nairobi');
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['submit']))
{
$user=$_POST['user'];
$sender=$_POST['sender'];
$subject=mysqli_real_escape_string($connection,$_POST['subject']);
$messages=mysqli_real_escape_string($connection,$_POST['messages']);

$sql= "INSERT INTO alertcopy(sender,username,subject,messages) values('$sender','$user','$subject','$messages')";
$sql_run = mysqli_query($connection,$sql);
$query= "INSERT INTO alert(sender,username,subject,messages) values('$sender','$user','$subject','$messages')";
$query_run = mysqli_query($connection,$query);
 
if($query_run)
{
    $_SESSION['status'] = "Message has been sent";
    $_SESSION['status_code'] = "success";
    header('Location: individual');

}
else
{
    $_SESSION['status'] = "Error! cannot send message, please contact Admin";
    $_SESSION['status_code'] = "error";
    header('Location: individual');


}
}
?>