<?php
session_start();
include('database/dbconfig.php');
include('log.php');
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
    <link rel="stylesheet" href="assets/signup.css">
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
    <section id="signup">
            <!-- navigation -->
    <nav>
        <img src="images/logo.png" alt="logo" >
        <div class="navigation">
            <ul id="navbar">
                <i id="close" class="fas fa-times"></i>
                <li><a href="index" >Home</a></li>
                <!-- <li class="dropdown"><button onclick="myFunction()" class="dropbtn">Scholarships</button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="#home">Home</a>
                        <a href="#about">About</a>
                        <a href="#contact">Contact</a>
                      </div></li> -->
                <li class=""><a href="scholarship">Scholarships</a></li>
                <li class="" ><a href="about">About Us</a></li>
                <li class=""><a href="contact">Contact Us</a></li>
                <div class="buttons">
                    <a href="signin" class="button">Sign in</a>
                    <a href="#" class="signup active">Sign up</a>
                </div>
            </ul>
            


        </div>
        <div id="bar"><i class="fas fa-bars"></i></div>
    </nav>
    <div class="ftco-section">
        <div class="row justify-content-center">
    <div class="col-md-6 col-lg-4 signin-bg">
    <div class="login-wrap p-0">
      <h3 class="mb-4 text-center">Sign up for an account</h3>
      <form  action="register.php" method="POST" class="signin-form">
        <div class="form-group d-md-flex ">
            <div class="form-wrapper ">
                <label for="">First Name</label>
                <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
            </div>
            <div class="form-wrapper">
                <label for="">Last Name</label>
                <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
            </div>
        </div>
        <div class="form-group ">
            <label for="">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Enter Username for Login" required>
        </div>
        <div class="form-group ">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Your email" required>
        </div>
        <div class="form-group input-space">                
            <input id="password-field" name="password" type="password" class="form-control" placeholder="Password" required>
            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
        </div>
        <div class="form-group input-space">                
            <input id="password-field1" type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" required>
            <span toggle="#password-field1" class="fa fa-fw fa-eye field-icon toggle-password"></span>
        </div>           
        
    
    <div class="checkbox">
        <label>
            <input type="checkbox" required><a href="privacy.html" target="" style="color: #B2BEFF;">  I accept the Terms of Use & Privacy Policy.</a>
            <span class="checkmark" required></span>	</label>
    </div>
    <div class="form-group">
        <button type="submit" name="signup_btn" class="form-control btn btn-primary submit px-3">Sign up</button>
    </div> 
    <div class="text-center">
        <a class="small"  href="signin" style="color: #B2BEFF;">Already have an account? Login</a>
    </div>      
  </form>
  </div>
</div>
    </div>
</div>        
    </section>
   
   
   
   
    <script>
        $('#bar').click(function(){
           $('nav.navigation ul').addClass('active')
       });
       $('#close').click(function(){
           $('nav.navigation ul').removeClass('active')
       });
   </script>
    <script src="https://use.fontawesome.com/4cdbe91b1d.js"></script>
    <script src="script.js"></script> 
    <script src="file.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script> 
    <script src="js/main3.js"></script>  
</body>
</html>