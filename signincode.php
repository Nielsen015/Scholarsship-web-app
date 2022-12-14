<?php
include('security.php');
include('log.php');

if(isset($_POST['login_btn']))
{
    $username_login = mysqli_real_escape_string($connection,$_POST['username']);
    $password_login = mysqli_real_escape_string($connection,$_POST['password']);
    
    //$hashed = hash('sha512', $password_login);
    $hashed = md5($password_login);
    $query = "SELECT * FROM users WHERE username='$username_login' AND password='$hashed' LIMIT 1 ";
    $query_run = mysqli_query($connection,$query);

    if(mysqli_fetch_array($query_run))
    { 
        $status_query = "SELECT status FROM users WHERE username='$username_login' ";
        $status_query_run = mysqli_query($connection,$status_query);
        $row = mysqli_fetch_assoc($status_query_run);
        
        $status=$row['status'];
        if($status !== 'active')
        {
            $_SESSION['status'] = 'Your account has been deactivated,Please contact us for more info.';
            $_SESSION['status_code'] = "error";
            header('Location: signin');
        } 
        else{
            $_SESSION['username'] = $username_login;
            header('location: dashboard');
        }
    }
    else
    {
        $_SESSION['status'] = 'Invalid Username or Password!!! Try again';
          $_SESSION['status_code'] = "warning";
        header('Location: signin');

    }

}
?>

