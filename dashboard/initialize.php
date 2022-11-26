<?php
include('security.php'); 
date_default_timezone_set('Africa/Nairobi');
$currentTime = date( 'd-m-Y h:i:s A', time () );

// delete message button
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
// delete college list button
if(isset($_POST['delete_listbtn']))
{
    $id =$_POST['delete_list'];

    $query = "DELETE FROM list WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    
    if($query_run)
    {
        $_SESSION['status'] = "Scholarship has been Deleted";
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
// edit page
if(isset($_POST['edit'])) 
{
    $oldpass = mysqli_real_escape_string($connection, $_POST['old']);
    $newpass =  mysqli_real_escape_string($connection, $_POST['new']);
    $cpassword =  mysqli_real_escape_string($connection, $_POST['cpassword']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    
    // check if email address exists
    $email_query = "SELECT * FROM users WHERE email='$email' AND username != '".$_SESSION['username']."'";
    $email_query_run = mysqli_query($connection,$email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "email already Taken, please pick another one";
        $_SESSION['status_code'] = "warning";
        header('location: setting.php');
    }
    else{
        
    $query = "SELECT password FROM users WHERE username='".$_SESSION['username']."'";
    $query_run = mysqli_query($connection,$query);
    $row = mysqli_fetch_assoc($query_run);
    
    $oldpassworddb=$row['password'];
    $hashed = md5($oldpass);
    $new_hashed = md5($newpass);
    $c_hashed = md5($cpassword);

    if($oldpassworddb===$hashed)
    {
       if($new_hashed===$c_hashed)
        {
            $query = "UPDATE users SET password='$new_hashed', email='$email' WHERE username='".$_SESSION['username']."'";
            $query_run = mysqli_query($connection,$query);
        
            if($query_run)
            {
                     
                $_SESSION['status'] = "Details Updated!";
                $_SESSION['status_code'] = "success";
                header('location: setting.php');
            }
            else
            {
                $_SESSION['status'] = "An error was encounter, Please contact admin";
                $_SESSION['status_code'] = "error";
                header('location: setting.php');
            }
        }
        else 
        {
            $_SESSION['status'] = "password and confirm New password Does Not Match";
            $_SESSION['status_code'] = "warning";
            header('location: setting.php');
        }
     
        }
        else 
        {
            $_SESSION['status'] = "Old password Does Not Match our records";
            $_SESSION['status_code'] = "warning";
            header('location: setting.php');
        }
    }
   
     }
    //  info page
     if(isset($_POST['info'])) 
     {
         $first_name = mysqli_real_escape_string($connection, $_POST['first']);
         $last_name =  mysqli_real_escape_string($connection, $_POST['last']);
         $date = $_POST['date'];
         $gender =  mysqli_real_escape_string($connection, $_POST['gender']);
         $country =  mysqli_real_escape_string($connection, $_POST['country']);
         $user = mysqli_real_escape_string($connection, $_POST['username']);
         
         // check if email address exists
         $user_query = "SELECT * FROM users WHERE username='$user' AND username != '".$_SESSION['username']."'";
         $user_query_run = mysqli_query($connection,$user_query);
         if(mysqli_num_rows($user_query_run) > 0)
         {
             $_SESSION['status'] = "Username already Taken, please pick another one";
             $_SESSION['status_code'] = "warning";
             header('location: setting.php');
         }
         else{
             
        //  $query = "SELECT password FROM users WHERE username='".$_SESSION['username']."'";
        //  $query_run = mysqli_query($connection,$query);
        //  $row = mysqli_fetch_assoc($query_run);
         
        $today = date("Y-m-d");
        $diff = date_diff(date_create($date), date_create($today));
     
        if($diff->format('%y%') > 16)
         {
            if($diff->format('%y%') < 120)
             {
                 $query = "UPDATE users SET first_name='$first_name',last_name='$last_name', username='$user',country='$country',gender='$gender', birth='$date' WHERE username='".$_SESSION['username']."'";
                 $academic_query = "UPDATE academics SET  username='$user' WHERE username='".$_SESSION['username']."'";
                 $query_run = mysqli_query($connection,$query);
                 $academic_query_run = mysqli_query($connection,$academic_query);
             
                 if($query_run)
                 {
                          
                     $_SESSION['status'] = "Details Updated!";
                     $_SESSION['status_code'] = "success";
                     header('location: setting.php');
                 }
                 else
                 {
                     $_SESSION['status'] = "An error was encounter, Please contact admin";
                     $_SESSION['status_code'] = "error";
                     header('location: setting.php');
                 }
             }
             else 
             {
                 $_SESSION['status'] = "You Must be below 120 to get acesss";
                 $_SESSION['status_code'] = "warning";
                 header('location: setting.php');
             }
          
             }
             else 
             {
                 $_SESSION['status'] = "you must be above 16 years to get access";
                 $_SESSION['status_code'] = "warning";
                 header('location: setting.php');
             }
         }
        
          }
        //   academic backend
        if(isset($_POST['academics'])) {
         $place = mysqli_real_escape_string($connection, $_POST['place']);
         $gpa =  $_POST['gpa'];
         $date = $_POST['date'];
         $course =  mysqli_real_escape_string($connection, $_POST['course']);

         $query = "UPDATE academics SET date='$date', score='$gpa', course='$course', school='$place' WHERE username='".$_SESSION['username']."'";
         $query_run = mysqli_query($connection,$query);
             
            if($query_run)
            {
                     
                $_SESSION['status'] = "Details Updated!";
                $_SESSION['status_code'] = "success";
                header('location: setting.php');
            }
            else
            {
                $_SESSION['status'] = "An error was encounter, Please contact admin";
                $_SESSION['status_code'] = "error";
                header('location: setting.php');
            }  
            }

  
?>