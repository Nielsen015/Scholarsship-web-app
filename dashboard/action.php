<?php
session_start();
date_default_timezone_set('Africa/Nairobi');
$currentTime = date( 'd-m-Y h:i:s A', time () );
include('database/dbconfig.php');
if(!$_SESSION['username'])
{
    $_SESSION['id']=$num['id'];
    header('Location: ../signin');
}
else {
  if(isset($_POST['update']))
  {
$invoicenumber=$_GET['cid'];
$status=$_POST['status'];
$remark=$_POST['remark'];
$query=mysqli_query($connection, "INSERT INTO receiptremark(invoiceNumber,status,remark) values('$invoicenumber','$status','$remark')");
$sql=mysqli_query($connection, "UPDATE receipts set status='$status' where invoiceNumber='$invoicenumber'");

echo "<script>alert('Receipt has been processed successfully');</script>";

  }

 ?>
<script language="javascript" type="text/javascript">
function f2()
{
window.close();
}ser
function f3()
{
window.print(); 
}
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>User Profile</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="anuj.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="center">
   <input type="checkbox" id ="click">
   <label for="click" class="click-me">Click Me</label>
   <div class ="content">
    <div class="header">
      <h2>Admin Profile</h2>
      <label for="click" class="fas fa-times"></label>
</div>
<!-- <div class="line"></div> -->
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio iure quod fugit, vero doloremque eos sit sequi ex sunt commodi officia repudiandae. Eos quidem labore praesentium obcaecati accusantium nemo vero.</p>
<a href="#">Apply Now</a>
</div>
</div>

<style>
body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: liner-gradient(#E0EAFC,#CFDEF3);
  height: 100vh;
  user-select: none;
}
.center, .content{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 400px;
  height: 400px;
  background: #fff;
  box-sizing: border-box;
  padding: 40px;
  border-radius: 10px;
  box-shadow: 0 15px 25px rgba(0,0,0,.5);
}
#click{
  display: none;
}
.click-me{
  position: absolute;
  top: 0;
  right: 0;
  width: 160px;
  height: 40px;
  background: #27ae60;
  border-radius: 0 0 0 10px;
  text-align: center;
  line-height: 40px;
  font-size: 25px;
  color: #000;
  cursor: pointer;
  transition: .5s;
}
.click-me:hover{
  background: #219150;
}
.content{
  opacity: 0;
  visibility: hidden;
  width: 400px;
  height: 350px;
  background: white;
  border-radius: 3px;
  transition: .3s ease-in;
  box-shadow: 0 2px 12px rgba(0,0,0,.5);
}
#click:checked ~ .content{
  opacity: 1;
  visibility: visible;
}
.header{
  height: 70px;
  background: #27ae60;
  overflow: hidden;
  border-radius: 3px 3px 0 0;
  position: relative;
  box-shadow: 0 2px 3px rgba(0,0,0,.3);
}
.header h2 {
  color: white;
  text-align: center;
  line-height: 70px;
  font-size: 25px;
  font-weight: 500;
  text-transform: uppercase;
  padding-left: 20px;
}
.fa-times {
  position: absolute;
  top: 20px;
  right: 20px;
  font-size: 20px;
  color: #e8f7fc;
  cursor: pointer;
  transition: .5s;
  font-weight: bold;
}
.fa-check {
  font-size: 30px;
  color: #27ae60;
  font-weight: bold;
  height: 80px;
  width: 80px;
  border: 1px solid #27ae60;
  margin: 30px 0 0 160px;
  text-align: center;
  padding-top: 13px;
  border-radius: 50%;
  box-sizing: border-box;
}
p {
  padding-top: 10px;
  color: #1a1a1a;
  font-size: 15px;
  text-align: center;
}
a {
  background-color: #24306e;
  border-radius: 25px;
  color: white;
  font-size: 12px;
  padding: 5px 8px;
  /* text-decoration: none;
  color: #fff;
  background: #27ae60;
  padding: 10px 20px;
  border-radius: 3px;
  font-size: 15px;
  font-weight: 500;
  text-transform: uppercase;
  margin-left: 140px;
  transition: .5s;
 */
}
</style>
<div style="margin-left:50px;">
 <form name="updateticket" id="updatecomplaint" method="post"> 
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td  >&nbsp;</td>
      <td >&nbsp;</td>
    </tr>
    <tr height="50">
      <td><b>Invoice Number:</b><?php echo htmlentities($_GET['cid']); ?></td>
    </tr>
    <tr height="50">
      <td><b>Status</b></td>
      <td><select name="status" required="required">
      <option value="">Select Status</option>
      <option value="declined">Decline</option>
    <option value="closed">Approve</option>
        
      </select></td>
    </tr>


      <tr height="50">
      <td><b>Remark</b></td>
      <td><textarea name="remark" cols="50" rows="10" required="required"></textarea></td>
    </tr>
    


        <tr height="50">
      <td>&nbsp;</td>
      <td><input type="submit" name="update" value="Submit"></td>
    </tr>



       <tr><td colspan="2">&nbsp;</td></tr>
    
    <tr>
  <td></td>
      <td >   
      <input name="Submit2" type="submit" class="txtbox4" value="Close this window " onClick="return f2();" style="cursor: pointer;"  /></td>
    </tr>
   

 
</table>
 </form>
</div>

</body>
</html>

     <?php } ?>