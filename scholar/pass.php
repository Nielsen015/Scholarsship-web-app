<?php
include('security.php');


if(isset($_POST['pass'])) 
{
    $oldpassword = mysqli_real_escape_string($connection, $_POST['oldpassword']);
    $newpassword =  mysqli_real_escape_string($connection, $_POST['newpassword']);
    $cpassword =  mysqli_real_escape_string($connection, $_POST['repeatnewpassword']);

    $hashed = md5($oldpassword);
    $query = "SELECT password FROM admin WHERE email='".$_SESSION['email']."'";
    $query_run = mysqli_query($connection,$query);
    $row = mysqli_fetch_assoc($query_run);
    
    $oldpassworddb=$row['password'];
    if($oldpassworddb===$hashed)
    {
       if($newpassword===$cpassword)
        {
            $hashed1 = md5($newpassword);
            $query = "UPDATE admin SET password='$hashed1' WHERE email='".$_SESSION['email']."'";
            $query_run = mysqli_query($connection,$query);
        
            if($query_run)
            {
                     
                $_SESSION['status'] = "Password changed Successfully";
                $_SESSION['status_code'] = "success";
                header('location: profiles');
            }
            else
            {
                $_SESSION['status'] = "An error was encounter, Please contact admin";
                $_SESSION['status_code'] = "error";
                header('location: password');
            }
        }
        else 
        {
            $_SESSION['status'] = "password and confirm New password Does Not March";
            $_SESSION['status_code'] = "warning";
            header('location: password');
        }
     
        }
        else 
        {
            $_SESSION['status'] = "Old password Does Not Match our records";
            $_SESSION['status_code'] = "warning";
            header('location: password');
        }
     }

    
?>