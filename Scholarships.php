<?php
include('database/dbconfig.php');
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="images/log.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Scholarly</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="css1/linearicons.css">
        <link rel="stylesheet" href="css1/font-awesome.min.css">
        <link rel="stylesheet" href="css1/bootstrap.css">
        <link rel="stylesheet" href="css1/magnific-popup.css">
        <link rel="stylesheet" href="css1/nice-select.css">							
        <link rel="stylesheet" href="css1/animate.min.css">
        <link rel="stylesheet" href="css1/owl.carousel.css">			
        <link rel="stylesheet" href="css1/jquery-ui.css">			
        <link rel="stylesheet" href="css1/main.css">
    </head>
    <body>	
      <header id="header" id="home">
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
              <div id="logo">
                <a href="index.html"><img src="images/log.png" alt="" title="" /></a>
              </div>
              <nav id="nav-menu-container">
                <ul class="nav-menu">
                  <li><a href="index">Home</a></li>
                  <li><a href="#" class="active">Scholarships</a></li>
                  <li><a href="About us">About Us</a></li>
                  <li><a href="Contact us">Contact Us</a></li>
                  <li><div class="buttons">
                    <a href="signin" class="button">Sign in</a>
                    <a href="signup" class="signup">Sign up</a>
                </div></li>
                
                </ul>
              </nav><!-- #nav-menu-container -->		    		
            </div>
        </div>
      </header><!-- #header -->
          
        <!-- start banner Area -->
        <section class="banner-area relative about-banner" id="home">	
            <div class="overlay overlay-bg"></div>
            <div class="container">				
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content col-lg-12">
                        <h1 class="text-white">
                            Scholarships	
                        </h1>	
                        <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Scholarships</a></p>
                    </div>	
                </div>
            </div>
        </section>
        <!-- End banner Area -->	

        <!-- Start popular-courses Area --> 
        <section class="popular-courses-area section-gap courses-page">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">We make Your Dream live on</h1>
                            <p>Let us help you achieve your dream by getting college funding</p>
                        </div>
                    </div>
                </div>						
                <div class="row">
                    <div class="single-popular-carusel col-lg-3 col-md-6">
                        <div class="thumb-wrap relative">
                            <div class="thumb relative">
                                <div class="overlay1 overlay-bg"></div>	
                                <img class="img-fluid" src="pictures/pic5.jpg" alt="">
                            </div>
                            <div class="meta d-flex justify-content-between">
                            <?php
                    $query = "SELECT * FROM scholarships WHERE id=1";
                    $query_run = mysqli_query($connection,$query);
                    while($row=mysqli_fetch_array($query_run))
                    {
                    ?>
                                <h5>Award:</h5>
                                <h4>$<?php echo $row['Amount']; ?></h4>
                            </div>									
                        </div>
                        <div class="details">
                            <a href="course-details.html">
                                <h4>
                                <?php echo substr($row['Scholarship Name'],0,25); ?>
                                </h4>
                            </a>
                            <p>
                                Deadline: <?php echo $row['Deadline']; ?>									
                            </p>
                            
                        </div>
                        <div class="btn-detail"><a href="dashboard/scholarship">Apply Now</a><?php }?></div>
                    </div>	
                    <div class="single-popular-carusel col-lg-3 col-md-6">
                        <div class="thumb-wrap relative">
                            <div class="thumb relative">
                                <div class="overlay1  overlay-bg"></div>	
                                <img class="img-fluid" src="pictures/pic8.jpg" alt="">
                            </div>
                            <div class="meta d-flex justify-content-between">
                            <?php
                    $query = "SELECT * FROM scholarships WHERE id=2";
                    $query_run = mysqli_query($connection,$query);
                    while($row=mysqli_fetch_array($query_run))
                    {
                    ?>
                                <h5>Award:</h5>
                                <h4>$<?php echo $row['Amount']; ?></h4>
                            </div>									
                        </div>
                        <div class="details">
                            <a href="course-details.html">
                                <h4>
                                <?php echo substr($row['Scholarship Name'],0,25); ?>
                                </h4>
                            </a>
                            <p>
                                Deadline: <?php echo $row['Deadline']; ?>									
                            </p>
                            
                        </div>
                        <div class="btn-detail"><a href="dashboard/scholarship">Apply Now</a><?php }?></div>
                    </div>	
                    <div class="single-popular-carusel col-lg-3 col-md-6">
                        <div class="thumb-wrap relative">
                            <div class="thumb relative">
                                <div class="overlay1  overlay-bg"></div>	
                                <img class="img-fluid" src="pictures/pic2.jpg" alt="">
                            </div>
                            <div class="meta d-flex justify-content-between">
                            <?php
                    $query = "SELECT * FROM scholarships WHERE id=3";
                    $query_run = mysqli_query($connection,$query);
                    while($row=mysqli_fetch_array($query_run))
                    {
                    ?>
                                <h5>Award:</h5>
                                <h4>$<?php echo $row['Amount']; ?></h4>
                            </div>									
                        </div>
                        <div class="details">
                            <a href="course-details.html">
                                <h4>
                                <?php echo substr($row['Scholarship Name'],0,25); ?>
                                </h4>
                            </a>
                            <p>
                                Deadline: <?php echo $row['Deadline']; ?>									
                            </p>
                            
                        </div>
                        <div class="btn-detail"><a href="dashboard/scholarship">Apply Now</a><?php }?></div>
                    </div>	
                    <div class="single-popular-carusel col-lg-3 col-md-6">
                        <div class="thumb-wrap relative">
                            <div class="thumb relative">
                                <div class="overlay1  overlay-bg"></div>	
                                <img class="img-fluid" src="pictures/pic3.jpg" alt="">
                            </div>
                            <div class="meta d-flex justify-content-between">
                            <?php
                    $query = "SELECT * FROM scholarships WHERE id=4";
                    $query_run = mysqli_query($connection,$query);
                    while($row=mysqli_fetch_array($query_run))
                    {
                    ?>
                                <h5>Award:</h5>
                                <h4>$<?php echo $row['Amount']; ?></h4>
                            </div>									
                        </div>
                        <div class="details">
                            <a href="course-details.html">
                                <h4>
                                <?php echo substr($row['Scholarship Name'],0,25); ?>
                                </h4>
                            </a>
                            <p>
                                Deadline: <?php echo $row['Deadline']; ?>									
                            </p>
                            
                        </div>
                        <div class="btn-detail"><a href="dashboard/scholarship">Apply Now</a><?php }?></div>
                    </div>	
                    <div class="single-popular-carusel col-lg-3 col-md-6">
                        <div class="thumb-wrap relative">
                            <div class="thumb relative">
                                <div class="overlay1  overlay-bg"></div>	
                                <img class="img-fluid" src="pictures/pic1.jpg" alt="">
                            </div>
                            <div class="meta d-flex justify-content-between">
                            <?php
                    $query = "SELECT * FROM scholarships WHERE id=5";
                    $query_run = mysqli_query($connection,$query);
                    while($row=mysqli_fetch_array($query_run))
                    {
                    ?>
                                <h5>Award:</h5>
                                <h4>$<?php echo $row['Amount']; ?></h4>
                            </div>									
                        </div>
                        <div class="details">
                            <a href="course-details.html">
                                <h4>
                                <?php echo substr($row['Scholarship Name'],0,25); ?>
                                </h4>
                            </a>
                            <p>
                                Deadline: <?php echo $row['Deadline']; ?>									
                            </p>
                            
                        </div>
                        <div class="btn-detail"><a href="dashboard/scholarship">Apply Now</a><?php }?></div>
                    </div>	
                    <div class="single-popular-carusel col-lg-3 col-md-6">
                        <div class="thumb-wrap relative">
                            <div class="thumb relative">
                                <div class="overlay1  overlay-bg"></div>	
                                <img class="img-fluid" src="images/c4.jpg" alt="">
                            </div>
                            <div class="meta d-flex justify-content-between">
                            <?php
                    $query = "SELECT * FROM scholarships WHERE id=6";
                    $query_run = mysqli_query($connection,$query);
                    while($row=mysqli_fetch_array($query_run))
                    {
                    ?>
                                <h5>Award:</h5>
                                <h4>$<?php echo $row['Amount']; ?></h4>
                            </div>									
                        </div>
                        <div class="details">
                            <a href="course-details.html">
                                <h4>
                                <?php echo substr($row['Scholarship Name'],0,25); ?>
                                </h4>
                            </a>
                            <p>
                                Deadline: <?php echo $row['Deadline']; ?>									
                            </p>
                            
                        </div>
                        <div class="btn-detail"><a href="dashboard/scholarship">Apply Now</a><?php }?></div>
                    </div>	
                    <div class="single-popular-carusel col-lg-3 col-md-6">
                        <div class="thumb-wrap relative">
                            <div class="thumb relative">
                                <div class="overlay1  overlay-bg"></div>	
                                <img class="img-fluid" src="images/c2.jpg" alt="">
                            </div>
                            <div class="meta d-flex justify-content-between">
                            <?php
                    $query = "SELECT * FROM scholarships WHERE id=7";
                    $query_run = mysqli_query($connection,$query);
                    while($row=mysqli_fetch_array($query_run))
                    {
                    ?>
                                <h5>Award:</h5>
                                <h4>$<?php echo $row['Amount']; ?></h4>
                            </div>									
                        </div>
                        <div class="details">
                            <a href="course-details.html">
                                <h4>
                                <?php echo substr($row['Scholarship Name'],0,25); ?>
                                </h4>
                            </a>
                            <p>
                                Deadline: <?php echo $row['Deadline']; ?>									
                            </p>
                            
                        </div>
                        <div class="btn-detail"><a href="dashboard/scholarship">Apply Now</a><?php }?></div>
                    </div>	
                    <div class="single-popular-carusel col-lg-3 col-md-6">
                        <div class="thumb-wrap relative">
                            <div class="thumb relative">
                                <div class="overlay1  overlay-bg"></div>	
                                <img class="img-fluid" src="images/c1.jpg" alt="">
                            </div>
                            <div class="meta d-flex justify-content-between">
                            <?php
                    $query = "SELECT * FROM scholarships WHERE id=8";
                    $query_run = mysqli_query($connection,$query);
                    while($row=mysqli_fetch_array($query_run))
                    {
                    ?>
                                <h5>Award:</h5>
                                <h4>$<?php echo $row['Amount']; ?></h4>
                            </div>									
                        </div>
                        <div class="details">
                            <a href="course-details.html">
                                <h4>
                                <?php echo substr($row['Scholarship Name'],0,25); ?>
                                </h4>
                            </a>
                            <p>
                                Deadline: <?php echo $row['Deadline']; ?>									
                            </p>
                            
                        </div>
                        <div class="btn-detail"><a href="dashboard/scholarship">Apply Now</a><?php }?></div>
                    </div>	
                    <a href="dashboard/scholarship" class="primary-btn text-uppercase mx-auto">Load More Scholarships</a>													
                </div>
            </div>	
        </section>
        <!-- End popular-courses Area -->			

        <!-- Start search-course Area -->
        <section class="search-course-area relative">
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6 col-md-6 search-course-left">
                        <h1 class="text-blue">
                            Get College funding<br>
                            and Achieve your dreams!
                        </h1>
                        <p>
                            Our Extensive Database will provide you with exactly what you need to live you dream again. We bring you close to over 20,000 Scholarships so that you do not need to hustle through the Internet.
                        </p>
                        <div class="row details-content">
                            <div class="col single-detials">
                                <span class="lnr lnr-graduation-hat"></span>
                                <a href="dashboard/scholarship"><h4>Search & get</h4></a>		
                                <p>
                                    Search through our database for a scholarship that suites you and apply.
                                </p>						
                            </div>
                            <div class="col single-detials">
                                <span class="lnr lnr-license"></span>
                                <a href="dashboard/scholarship"><h4>Get admited</h4></a>		
                                <p>
                                    Get admitted to your college of choice through the scholarship fund and achieve your goals.
                                </p>						
                            </div>								
                        </div>
                    </div>
                </div>
            </div>	
        </section>
        <!-- End search-course Area -->									    			

        <!-- start footer Area -->		
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Quick Links</h4>
                            <ul>
                                <li><a href="index">Home</a></li>
                                <li><a href="About us">About Us</a></li>
                                <li><a href="Contact us">Contact Us</a></li>
                                <li><a href="signup">Sign Up</a></li>
                            </ul>								
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>My Account</h4>
                            <ul>
                                <li><a href="signin">Sign in</a></li>
                                <li><a href="dashboard/index">Dashboard</a></li>
                                <a href="dashboard/college_list"><li>Wish List</li></a>
                                <li><a href="dashboard/setting">Profile</a></li>
                            </ul>								
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Search By Levels</h4>
                            <ul>
                                <li><a href="#">PhD</a></li>
                                <li><a href="#">Masters</a></li>
                                <li><a href="#">Bachelors</a></li>
                                <li><a href="#">Diploma</a></li>
                            </ul>								
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Policies</h4>
                            <ul>
                                <li><a href="#">How it Works</a></li>
                                <li><a href="#">Protection</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Personal Information</a></li>
                            </ul>								
                        </div>
                    </div>																		
                    <div class="col-lg-4  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Newsletter</h4>
                            <p>Stay update with our latest</p>
                            <div class="" id="mc_embed_signup">
                                 <form target="_blank" action="" method="get">
                                  <div class="input-group">
                                    <input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
                                    <div class="input-group-btn">
                                      <button class="btn btn-default" type="submit">
                                        <span class="lnr lnr-arrow-right"></span>
                                      </button>    
                                    </div>
                                        <div class="info"></div>  
                                  </div>
                                </form> 
                            </div>
                        </div>
                    </div>											
                </div>
                <div class="footer-bottom row align-items-center justify-content-between">
                    <p class="footer-text m-0 col-lg-6 col-md-12">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Scholarly</p>
                    <div class="col-lg-6 col-sm-12 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin-square"></i></a>
                    </div>
                </div>						
            </div>
        </footer>	
        <!-- End footer Area -->	


        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="js/vendor/bootstrap.min.js"></script>			
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
          <script src="js/easing.min.js"></script>			
        <script src="js/hoverIntent.js"></script>
        <script src="js/superfish.min.js"></script>	
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>	
        <script src="js/jquery.tabs.min.js"></script>						
        <script src="js/jquery.nice-select.min.js"></script>	
        <script src="js/owl.carousel.min.js"></script>									
        <script src="js/mail-script.js"></script>	
        <script src="js/main2.js"></script>	
    </body>
</html>