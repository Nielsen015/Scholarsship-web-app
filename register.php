<?php
include('security.php'); 

if(isset($_POST['login_btn'])) 
{
    $first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
    $username = mysqli_real_escape_string($connection,$_POST['username']);
    $email = mysqli_real_escape_string($connection,$_POST['email']);
    $password = mysqli_real_escape_string($connection,$_POST['password']);
    $cpassword = $_POST['confirmpassword'];

    
    $email_query = "SELECT * FROM users WHERE email='$email' ";
    $email_query_run = mysqli_query($connection,$email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "email already Taken, please pick another one";
        $_SESSION['status_code'] = "warning";
        header('location: signup.php');
    }
    else {
      
    $username_query = "SELECT * FROM users WHERE username='$username' ";
    $username_query_run = mysqli_query($connection,$username_query);
    if(mysqli_num_rows($username_query_run) > 0)
    {
        $_SESSION['status'] = "Username already Taken, please try another one";
        $_SESSION['status_code'] = "warning";
        header('location: signup.php');
    }
    else
     {

    if($password === $cpassword)
    {

        $hashed = hash('sha512', $password);
        $query = "INSERT INTO users (first_name,last_name,username,email,password) VALUES('$first_name','$last_name','$username','$email','$hashed')";
        $query_run = mysqli_query($connection,$query);
    
        if($query_run)
        {
      
            $_SESSION['state'] = "Registration Successful!! Sign in Here.";
            header('location: dashboard/index.php');
        }
        else
        {
            $_SESSION['status'] = 'Invalid Username or Password!!! Try again';
            $_SESSION['status_code'] = "warning";
            header('Location: signup.php');

        }
    }
    else 
        {
            $_SESSION['status'] = "password and confirm password Do Not Match";
            $_SESSION['status_code'] = "warning";
            header('location: signup.php');
        }
    }
}
}
?>