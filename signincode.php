<?php
include('security.php');

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
        
        $_SESSION['username'] = $username_login;
        $_SESSION['id']=$num['id'];
        header('Location: dashboard');

    }
    else
    {
        $_SESSION['status'] = 'Invalid Username or Password!!! Try again';
          $_SESSION['status_code'] = "warning";
        header('Location: signin');

    }

}
?>

