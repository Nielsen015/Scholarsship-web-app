<?php
include('security.php'); 



if(isset($_POST['submit']))
{
$username=$_SESSION['username'];
$compfile=$_FILES["compfile"]["name"];
$allowed = array('jpeg','jpg','png');



move_uploaded_file($_FILES["compfile"]["tmp_name"],"profile/".$_FILES["compfile"]["name"]);

$user_query = "SELECT * FROM users WHERE username='$username'";
$user_query_run = mysqli_query($connection,$user_query);
if(mysqli_num_rows($user_query_run) > 0)
{
    $query= "UPDATE users SET compfile='$compfile' WHERE username='".$_SESSION['username']."'";
    $query_run = mysqli_query($connection,$query);
    
if($query_run)
{
    $_SESSION['status'] = "Picture has been Successfully uploaded";
    $_SESSION['status_code'] = "success";
    header('Location: setting');

}
else
{
    $_SESSION['status'] = "Error! cannot upload picture, please contact Admin";
    $_SESSION['status_code'] = "error";
    header('Location: setting');


}
}
else {
    $query = "INSERT INTO users (compfile) WHERE username='$username' VALUES('$compfile')";
    $query_run = mysqli_query($connection,$query);
    
    if($query_run)
    {
        $_SESSION['status'] = "Picture has been Successfully uploaded";
        $_SESSION['status_code'] = "success";
        header('Location: setting');
    
    }
    else
    {
        $_SESSION['status'] = "Error! cannot upload picture, please contact Admin";
        $_SESSION['status_code'] = "error";
        header('Location: setting');
    
    
    }
}

}
?>