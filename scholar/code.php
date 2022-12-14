<?php
include('security.php');
date_default_timezone_set('Africa/Nairobi');
$currentTime = date( 'd-m-Y h:i:s A', time () );

if(isset($_POST['check_submit_btn']))
{
    $email = $_POST['email_id'];

    $email_query = "SELECT * FROM register WHERE email='$email' ";
    $email_query_run = mysqli_query($connection,$email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        echo"Email already Taken, please try another one.";
    }
    else
     {
        echo"It's Available.";
     }
}
// create admin user
if(isset($_POST['registerbtn'])) 
{
    $firstname = mysqli_real_escape_string($connection, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($connection, $_POST['lastname']);
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $role = $_POST['role'];
    $status = 'active';

    $hashed = md5($password);
    

    $email_query = "SELECT * FROM admin WHERE email='$email' ";
    $email_query_run = mysqli_query($connection,$email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "email already Taken, please another one";
        $_SESSION['status_code'] = "warning";
        header('location: admin');
    }
    else 
      
        $username_query = "SELECT * FROM admin WHERE username='$username' ";
        $username_query_run = mysqli_query($connection,$username_query);
        if(mysqli_num_rows($username_query_run) > 0)
        {
            $_SESSION['status'] = "Username already Taken, please try another one";
            $_SESSION['status_code'] = "warning";
            header('location: admin');
        }
    else
     {

    
        if($password === $cpassword)
        {
            $query = "INSERT INTO admin (username,firstname,lastname,role,status,email,password) VALUES('$username','$firstname','$lastname','$role','$status','$email','$hashed')";
            $query_run = mysqli_query($connection,$query);
            $sql = "INSERT INTO pic (user) VALUES('$email')";
            $sql_run = mysqli_query($connection,$sql);
        
        
            if($query_run)
            {
                //echo saved       
                $_SESSION['status'] = "Admin Profile Added";
                $_SESSION['status_code'] = "success";
                header('location: admin');
            }
            else
            {
                $_SESSION['status'] = "Admin Profile NOT Added";
                $_SESSION['status_code'] = "error";
                header('location: admin');
            }
        }
        else 
        {
            $_SESSION['status'] = "password and confirm password Does Not March";
            $_SESSION['status_code'] = "warning";
            header('location: register.php');
        }
     }
}
if(isset($_POST['updatebtn']))
{
    $id =$_POST['edit_id'];
    $username = mysqli_real_escape_string($connection, $_POST['edit_username']);
    $firstname = mysqli_real_escape_string($connection, $_POST['edit_first']);
    $lastname = mysqli_real_escape_string($connection, $_POST['edit_last']);
    $email = mysqli_real_escape_string($connection,$_POST['edit_email']);
    $role = $_POST['role'];


    $query = "UPDATE admin SET username='$username', firstname='$firstname', lastname='$lastname', email='$email', role='$role' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data has been Updated Successfully";
        $_SESSION['status_code'] = "success";
        header('Location: admin');

    }
    else
    {
        $_SESSION['status'] = "Error! cannot update data, please contact Admin";
        $_SESSION['status_code'] = "error";
        header('Location: admin');


    }
}
if(isset($_POST['delete_btn']))
{
    $id =$_POST['delete_id'];

    $query = "DELETE FROM admin WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    
    if($query_run)
    {
        $_SESSION['status'] = "Data has been Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: admin');

    }
    else
    {
        $_SESSION['status'] = "Error! cannot delete data, please contact Admin";
        $_SESSION['status_code'] = "error";
        header('Location: admin');


    }
}

if(isset($_POST['tenantbtn'])) 
{
    $first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
    $id_no = $_POST['id_no'];
    $house_no = $_POST['house_no'];

    
    $house_no_query = "SELECT * FROM tenants WHERE house_no='$house_no' ";
    $house_no_query_run = mysqli_query($connection,$house_no_query);
    if(mysqli_num_rows($house_no_query_run) > 0)
    {
        $_SESSION['status'] = "House Number is already registered with a tenant";
        $_SESSION['status_code'] = "warning";
        header('location: tenant.php');
    }
    else
     {
    
    $id_no_query = "SELECT * FROM tenants WHERE id_no='$id_no' ";
    $id_no_query_run = mysqli_query($connection,$id_no_query);
    if(mysqli_num_rows($id_no_query_run) > 0)
    {
        $_SESSION['status'] = "ID Number already Taken, please another one";
        $_SESSION['status_code'] = "warning";
        header('location: tenant.php');
    }
    else
     {

    

        $query = "INSERT INTO tenants (first_name,last_name,id_no,house_no) VALUES('$first_name','$last_name','$id_no','$house_no')";
        $query_run = mysqli_query($connection,$query);
    
        if($query_run)
        {
            //echo saved       
            $_SESSION['status'] = "Tenant Details Added";
            $_SESSION['status_code'] = "success";
            header('location: tenant.php');
        }
        else
         {
            $_SESSION['status'] = "Tenant Details NOT Added";
            $_SESSION['status_code'] = "error";
            header('location: tenant.php');
        }
    }
    }
   
}

if(isset($_POST['housebtn'])) 
{
    $house_no = $_POST['house_no'];
    $rooms = $_POST['rooms'];

    
    $house_no_query = "SELECT * FROM houses WHERE house_no='$house_no' ";
    $house_no_query_run = mysqli_query($connection,$house_no_query);
    if(mysqli_num_rows($house_no_query_run) > 0)
    {
        $_SESSION['status'] = "House Details already Exist,Please enter a different House Number";
        $_SESSION['status_code'] = "warning";
        header('location: register.php');
    }
    else
     {
    
        $query = "INSERT INTO houses (house_no,rooms) VALUES('$house_no','$rooms')";
        $query_run = mysqli_query($connection,$query);
    
        if($query_run)
        {
            //echo saved       
            $_SESSION['status'] = "House Data Added";
            $_SESSION['status_code'] = "success";
            header('location: houses.php');
        }
        else
         {
            $_SESSION['status'] = "House Data NOT Added";
            $_SESSION['status_code'] = "error";
            header('location: houses.php');
        }
    }
   
}

if(isset($_POST['vacancybtn'])) 
{
    $house_no = $_POST['house_no'];
    $state = $_POST['state'];

    
    $house_no_query = "SELECT * FROM vacancy WHERE house_no='$house_no' ";
    $house_no_query_run = mysqli_query($connection,$house_no_query);
    if(mysqli_num_rows($house_no_query_run) > 0)
    {
        $_SESSION['status'] = "House is already Vacant, please try a different house";
        $_SESSION['status_code'] = "warning";
        header('location: vacancy.php');
    }
    else
     {
    
        $query = "INSERT INTO vacancy (house_no,state) VALUES('$house_no','$state')";
        $query_run = mysqli_query($connection,$query);
    
        if($query_run)
        {
            //echo saved       
            $_SESSION['status'] = "House Data Added";
            $_SESSION['status_code'] = "success";
            header('location: vacancy.php');
        }
        else
         {
            $_SESSION['status'] = "House Data  NOT Added";
            $_SESSION['status_code'] = "error";
            header('location: vacancy.php');
        }
    }
   
}
if(isset($_POST['update_tenantbtn']))
{
    $tenant_id =$_POST['edit_tenant'];
    $first_name = mysqli_real_escape_string($connection,$_POST['edit_first']);
    $last_name = mysqli_real_escape_string($connection,$_POST['edit_last']);
    $id_no = $_POST['edit_id'];
    $house_no = $_POST['edit_number'];


    $query = "UPDATE tenants SET first_name='$first_name', last_name='$last_name', id_no='$id_no', house_no='$house_no' WHERE tenant_id='$tenant_id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data has been Updated Successfully";
        $_SESSION['status_code'] = "success";
        header('Location: tenant.php');

    }
    else
    {
        $_SESSION['status'] = "Error! cannot update data, please contact Admin";
        $_SESSION['status_code'] = "error";
        header('Location: tenant.php');


    }
}
if(isset($_POST['delete_tenantbtn']))
{
    $tenant_id =$_POST['delete_tenant'];

    $query = "DELETE FROM tenants WHERE tenant_id='$tenant_id' ";
    $query_run = mysqli_query($connection, $query);

    
    if($query_run)
    {
        $_SESSION['status'] = "Data has been Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: tenant.php');

    }
    else
    {
        $_SESSION['status'] = "Error! cannot delete data, please contact Admin";
        $_SESSION['status_code'] = "error";
        header('Location: tenant.php');


    }
}
if(isset($_POST['update_vacancybtn']))
{
    $vacancy_id =$_POST['edit_vacancy'];
    $house_no = $_POST['edit_house'];
    $state = $_POST['edit_condition'];
   
    $query = "UPDATE vacancy SET house_no='$house_no', state='$state' WHERE vacancy_id='$vacancy_id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data has been Updated Successfully";
        $_SESSION['status_code'] = "success";
        header('Location: vacancy.php');

    }
    else
    {
        $_SESSION['status'] = "Error! cannot update data, please contact Admin";
        $_SESSION['status_code'] = "error";
        header('Location: vacancy.php');


    }
}
if(isset($_POST['delete_vacancybtn']))
{
    $vacancy_id =$_POST['delete_vacancy'];

    $query = "DELETE FROM vacancy WHERE vacancy_id='$vacancy_id' ";
    $query_run = mysqli_query($connection, $query);

    
    if($query_run)
    {
        $_SESSION['success'] = "";
        $_SESSION['status'] = "Data has been Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: vacancy.php');

    }
    else
    {
        $_SESSION['status'] = "Error! cannot delete data, please contact Admin";
        $_SESSION['status_code'] = "error";
        header('Location: vacancy.php');


    }
}
if(isset($_POST['update_housebtn']))
{
    $house_id =$_POST['edit_house'];
    $house_no = $_POST['edit_houseno'];
    $rooms = $_POST['edit_rooms'];
   
    $query = "UPDATE houses SET house_no='$house_no', rooms='$rooms' WHERE house_id='$house_id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data has been Updated Successfully";
        $_SESSION['status_code'] = "success";
        header('Location: houses.php');

    }
    else
    {
        $_SESSION['status'] = "Error! cannot update data, please contact Admin";
        $_SESSION['status_code'] = "error";
        header('Location: houses.php');


    }
}
if(isset($_POST['delete_housebtn']))
{
    $house_id =$_POST['delete_house'];

    $query = "DELETE FROM houses WHERE house_id='$house_id' ";
    $query_run = mysqli_query($connection, $query);

    
    if($query_run)
    {
        $_SESSION['status'] = "Data has been Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: houses.php');

    }
    else
    {
        $_SESSION['status'] = "Error! cannot delete data, please contact Admin";
        $_SESSION['status_code'] = "error";
        header('Location: houses.php');


    }
}

if(isset($_POST['delete_userbtn']))
{
    $id =$_POST['delete_user'];

    $query = "DELETE FROM users WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    
    if($query_run)
    {
        $_SESSION['status'] = "Data has been Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: users.php');

    }
    else
    {
        $_SESSION['status'] = "Error! cannot delete data, please contact Admin";
        $_SESSION['status_code'] = "error";
        header('Location: users.php');


    }
}
if(isset($_POST['rentbtn']))
{
    $house_no = $_POST['house_no'];
    $amount =$_POST['amount'];
    $balance =$_POST['balance'];
    $year =$_POST['year'];
    $month =$_POST['month'];

    $query = "INSERT INTO payment (house_no,amount,balance,year,month) VALUES('$house_no','$amount','$balance','$year','$month')";
        $query_run = mysqli_query($connection,$query);
    
    if($query_run)
    {
        $_SESSION['status'] = "Payment Added Successfully";
        $_SESSION['status_code'] = "success";
        header('Location: payments.php');

    }
    else
    {
        $_SESSION['status'] = "Error! cannot add payment, please contact Admin";
        $_SESSION['status_code'] = "error";
        header('Location: payments.php');


    }
}

if(isset($_POST['update_paybtn']))
{
    $id =$_POST['edit_pay'];
    $amount = $_POST['edit_balance'];
    $mode = $_POST['edit_mode'];


    $query = "UPDATE payment SET balance='$amount', mode='$mode' WHERE transact_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data has been Updated Successfully";
        $_SESSION['status_code'] = "success";
        header('Location: payments');

    }
    else
    {
        $_SESSION['status'] = "Error! cannot update data, please contact Admin";
        $_SESSION['status_code'] = "error";
        header('Location: payments');


    }
}
if(isset($_POST['delete_paybtn']))
{
    $id =$_POST['delete_payment'];

    $query = "DELETE FROM payment WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    
    if($query_run)
    {
        $_SESSION['status'] = "Data has been Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: payments.php');

    }
    else
    {
        $_SESSION['status'] = "Error! cannot delete data, please contact Admin";
        $_SESSION['status_code'] = "error";
        header('Location: payments.php');


    }
}
    if(isset($_POST['delete_broadcastbtn']))
{
    $id =$_POST['delete_broadcast'];

    $query = "DELETE FROM messages WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    
    if($query_run)
    {
        $_SESSION['status'] = "Data has been Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: broadcast.php');

    }
    else
    {
        $_SESSION['status'] = "Error! cannot delete data, please contact Admin";
        $_SESSION['status_code'] = "error";
        header('Location: broadcast.php');


    }
}
// delete user message history
if(isset($_POST['delete_individualbtn']))
{
    $id =$_POST['delete_individual'];

    $query = "DELETE FROM send_history WHERE id_no='$id' ";
    $query_run = mysqli_query($connection, $query);

    
    if($query_run)
    {
        $_SESSION['status'] = "Message has been Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: message_history');

    }
    else
    {
        $_SESSION['status'] = "Error! cannot delete Message, please contact Admin";
        $_SESSION['status_code'] = "error";
        header('Location: message_history');


    }
}
// delete admin alerts
if(isset($_POST['delete_adminalertbtn']))
{
    $id =$_POST['delete_adminalert'];

    $query = "DELETE FROM admincast WHERE id_no='$id' ";
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
// delete admin Message History
if(isset($_POST['delete_castbtn']))
{
    $id =$_POST['delete_cast'];

    $query = "DELETE FROM admincastcopy WHERE id_no='$id' ";
    $query_run = mysqli_query($connection, $query);

    
    if($query_run)
    {
        $_SESSION['status'] = "Message has been Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: admincast');

    }
    else
    {
        $_SESSION['status'] = "Error! cannot delete Message, please contact Admin";
        $_SESSION['status_code'] = "error";
        header('Location: admincast');


    }
}
?>