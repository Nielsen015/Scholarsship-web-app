<?php
include('security.php'); 
date_default_timezone_set('Africa/Nairobi');
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['submit']))
{
$user=$_POST['username'];
$sender=$_POST['sender'];
$subject=mysqli_real_escape_string($connection,$_POST['subject']);
$messages=mysqli_real_escape_string($connection,$_POST['messages']);

$sql= "INSERT INTO admincastcopy(sender,receiver,subject,messages) values('$sender','$user','$subject','$messages')";
$sql_run = mysqli_query($connection,$sql);
$query= "INSERT INTO admincast(sender,receiver,subject,messages) values('$sender','$user','$subject','$messages')";
$query_run = mysqli_query($connection,$query);
 
if($query_run)
{
    $role_query = "SELECT role FROM admin where email='".$_SESSION['email']."'";
    $role_query_run = mysqli_query($connection, $role_query);
    while($row=mysqli_fetch_array($role_query_run))
{
?>
<?php
    if($row['role'] == 'super'){
        $_SESSION['status'] = "Message has been sent";
        $_SESSION['status_code'] = "success";
        header('location: admincaster');
    } 
    else 
    {
        $_SESSION['status'] = "Message has been sent";
        $_SESSION['status_code'] = "success";
        header('location: admincom');
        } ?>
        <?php }

}
else
{
    if($row['role'] == 'super'){
    $_SESSION['status'] = "Error! cannot send message, please contact Admin";
    $_SESSION['status_code'] = "error";
    header('Location: admincaster');
    }
    else{
        $_SESSION['status'] = "Error! cannot send message, please contact Admin";
        $_SESSION['status_code'] = "error";
        header('Location: admincom');
    }


}
}
?>