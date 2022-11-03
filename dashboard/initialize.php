<?php
include('security.php'); 
date_default_timezone_set('Africa/Nairobi');
$currentTime = date( 'd-m-Y h:i:s A', time () );

if(isset($_POST['delete_textbtn']))
{
    $id =$_POST['delete_text'];

    $query = "DELETE FROM alert WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    
    if($query_run)
    {
        $_SESSION['status'] = "Message has been Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: alert');

    }
    else
    {
        $_SESSION['status'] = "Error! cannot delete Message, please contact Admin";
        $_SESSION['status_code'] = "error";
        header('Location: alert');


    }
}












?>