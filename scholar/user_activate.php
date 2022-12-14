<?php
include('security.php');
date_default_timezone_set('Africa/Nairobi');
$currentTime = date( 'd-m-Y h:i:s A', time () );
if(isset($_POST['activate_btn']))
{
    $id =$_POST['activate_id'];

    $query = "UPDATE users SET status='active' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    
    if($query_run)
    {
        $_SESSION['status'] = "User Activated";
        $_SESSION['status_code'] = "success";
        header('Location: users');

    }
    else
    {
        $_SESSION['status'] = "Error! cannot activate user, please contact Admin";
        $_SESSION['status_code'] = "error";
        header('Location: users');


    }
}
if(isset($_POST['deactivate_btn']))
{
    $id =$_POST['deactivate_id'];

    $query = "UPDATE users SET status='inactive' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    
    if($query_run)
    {
        $_SESSION['status'] = "User Deactivated";
        $_SESSION['status_code'] = "success";
        header('Location: users');

    }
    else
    {
        $_SESSION['status'] = "Error! cannot deactivate user, please contact Admin";
        $_SESSION['status_code'] = "error";
        header('Location: users');


    }
}
?>