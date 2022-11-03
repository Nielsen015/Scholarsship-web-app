<?php
session_start();
include('database/dbconfig.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarly</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/icon type">
    <link rel="stylesheet" href="css/style3.css">  
    <link rel="stylesheet" href="assets/signin.css">
    <link rel="stylesheet" href="assets/style1.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <!-- <script
			  src="https://code.jquery.com/jquery-3.6.0.min.js"
			  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			  crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
		
    <script src="https://use.fontawesome.com/4cdbe91b1d.js"></script>
    
     
</head>
<body>
    <!-- Home -->
    <section id="signin-page">
            <!-- navigation -->
    <nav>
        <img src="images/logo.png" alt="logo" >
        <div class="navigation">
            <ul id="navbar">
                <i id="close" class="fas fa-times"></i>
                <li><a href="index" >Home</a></li>
                <li class=""><a href="Scholarships">Scholarships</a></li>
                <li class="" ><a href="About us">About Us</a></li>
                <li class="" ><a href="Contact us">Contact Us</a></li>
                <div class="buttons">
                    <a href="#" class="button">Sign in</a>
                    <a href="signup" class="signup">Sign up</a>
                </div>
            </ul>
            


        </div>
        <div id="bar"><i class="fas fa-bars"></i></div>
    </nav>
    <section class="ftco-section">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 signin-bg">
                <div class="login-wrap p-0 ">
              <h3 class="mb-4 text-center">Sign into your account</h3>
              <form action="signincode.php" method="POST" class="signin-form">
              <?php
                if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
                {
                    echo '<h4 class="bg-danger text-white"> '.$_SESSION['status'].' </h4>';
                    unset($_SESSION['status']);
                }
                ?>
                  <div class="form-group input-space">
                      <input type="text" name="username" class="form-control" placeholder="Username" required>
                  </div>
            <div class="form-group input-space">
              <input id="password-field" name="password" type="password" class="form-control" placeholder="Password" required>
              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            </div>
            <div class="form-group ">
                <button type="submit" name="login_btn" class="form-control btn btn-primary submit px-3">Sign In</button>
            </div>
            <div class="form-group d-md-flex">
                <div class="w-50">
                <div class="w-50 text-md-left">
                                <a href="signup" style="color: #fff">Create Account</a>
                            </div>
                            </div>
                            <div class="w-50 text-md-right">
                                <a href="" style="color: #fff">Forgot Password</a>
                            </div>
            </div>
          </form>
          </div>
            </div>
        </div> 
        </section>         
    </section>
    <script src="https://use.fontawesome.com/4cdbe91b1d.js"></script>
    <script src="script.js"></script> 
    <script src="file.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>   
</body>
</html>