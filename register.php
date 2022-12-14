<?php
include('security.php'); 

if(isset($_POST['signup_btn'])) 
{
    $first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
    $username = mysqli_real_escape_string($connection,$_POST['username']);
    $email = mysqli_real_escape_string($connection,$_POST['email']);
    $password = mysqli_real_escape_string($connection,$_POST['password']);
    $cpassword = $_POST['confirmpassword'];
    $status = 'active';
    $balance = 0;

    
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
        header('location: signup');
    }
    else
     {

    if($password === $cpassword)
    {
        //$hashed = hash('sha512', $password);
        $hashed = md5($password);
        $query = "INSERT INTO users (first_name,last_name,username,email,password,status) VALUES('$first_name','$last_name','$username','$email','$hashed','$status')";
        $query_run = mysqli_query($connection,$query);
        $sql = "INSERT INTO academics (username) VALUES('$username')";
        $sql_run = mysqli_query($connection,$sql);
        $sql1 = "INSERT INTO payment (username,balance) VALUES('$username','$balance')";
        $sql1_run = mysqli_query($connection,$sql1);
        if($query_run)
        {
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "Welcome To Scholarly, $username";
            $_SESSION['status_code'] = "success";
            header('location: dashboard');
        }
        else
        {
            $_SESSION['status'] = 'Invalid Username or Password!!! Try again';
            $_SESSION['status_code'] = "warning";
            header('Location: signup');

        }
    }
    else 
        {
            $_SESSION['status'] = "password and confirm password Do Not Match";
            $_SESSION['status_code'] = "warning";
            header('location: signup');
        }
    }
}
}
?>