<?php
include('security.php');
include('activity_log.php');

if(isset($_POST['login_btn']))
{
    $email_login = $_POST['email'];
    $password_login = $_POST['password'];
    $hashed = md5($password_login);

    $query = "SELECT * FROM admin WHERE email='$email_login' AND password='$hashed' LIMIT 1 ";
    $query_run =mysqli_query($connection,$query);
    // $row = mysqli_fetch_assoc($query_run);
    // $role = $row['role'];

    if(mysqli_fetch_array($query_run)) 
    {
        $status_query = "SELECT status FROM admin WHERE email='$email_login'";
        $status_query_run = mysqli_query($connection,$status_query);
        $row = mysqli_fetch_assoc($status_query_run);
        
        $status=$row['status'];
        if($status !== 'active')
        {
            $_SESSION['status'] = 'Your account has been deactivated,Please contact the Admin for more info.';
            $_SESSION['status_code'] = "error";
            header('Location: login');
        } 
        else
        {

            $role_query = "SELECT role FROM admin WHERE email='$email_login'";
            $role_query_run = mysqli_query($connection, $role_query);
            $row = mysqli_fetch_assoc($role_query_run);

            $role = $row['role'];
            if ($role !== 'super') {
                $_SESSION['email'] = $email_login;
                header('location: home');
            } else {
                $_SESSION['email'] = $email_login;
                header('location: index');
            }
        }

    
   
    }
    else
    {
        $_SESSION['status'] = 'Invalid email or Password!!! Try again';
        $_SESSION['status_code'] = "warning";
        header('Location: login');

    }
        

}

?>