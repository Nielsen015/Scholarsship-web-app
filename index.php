<?php
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
    <section id="home">
            <!-- navigation -->
    <nav>
        <img src="images/logo.png" alt="logo" >
        <div class="navigation">
            <ul id="navbar">
                <i id="close" class="fas fa-times"></i>
                <li><a href="#" class="active">Home</a></li>
                <li class="about"><a href="Scholarships">Scholarships</a></li>
                <li class="about"><a href="About us">About Us</a></li>
                <li class="contact"><a href="Contact us">Contact Us</a></li>
                <div class="buttons">
                    <a href="signin" class="button">Sign in</a>
                    <a href="signup" class="signup">Sign up</a>
                </div>
            </ul>
            


        </div>
        <div id="bar"><i class="fas fa-bars"></i></div>
    </nav>
    <div class="home">
        <h2> <span style="color: #24306e;">Find Scholarships</span><br>and achieve your dreams</h2>
        <p>Get financial aid to cater for your studies.<br>We provide a colletion of scholarships applications that suit your needs.</p>
        <div class="btn">
            <a href="signin">Get started</a>
        </div>
    </div>
       
    </section>
    <section class="section-p2"><main></main></section>
    <section id="about-head" class="section-p3">
        <img src="pictures/b5.jpg" alt="img">
        <div>
            <div class="text">
                <h2>Find Scholarships</h2>
                <p>Find and compare University 
                Scholarships Worldwide.Get a collections of suitable scholarships <br>
                from our expansive scholarship database.</p>
                <div class="btn">
                    <a href="dashboard/index">Find Scholarships</a>
                </div>
            </div>
        </div>
    </section>
    <section id="about-head1" class="section-p1">
        
        <div>
            <div class="text">
                <h2>Bachelors, Masters, PHD</h2>
                <p>Get scholarships according to your degree of prefrence. 
                    Find financial aid to help you fund your education.</p>
                <div class="btn">
                    <a href="dashboard/index">Find by Degree</a>
                </div>
            </div>
        </div>
        <img src="pictures/pic7.jpg" alt="img">
    </section>
    <section id="about-head" class="section-p1">
        <img src="pictures/pic9.jpg" alt="img">
        <div>
            <div class="text">
                <h2>Achieve your dreams</h2>
                <p>Access scholarships that match your education financial
                     needs and achieve your goals.</p>
                <div class="btn">
                    <a href="dashboard/index">Apply Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Scholarships page -->
    <section id="scholarships" class="section-p1">
        <h1>Popular Scholarships</h1>
        <p>College student scholarships are scholarships awarded to students who are currently attending or are about to attend college. Students who have graduated and been accepted to a college or university can typically apply for these scholarships. </p>
        <div class="course-box">
            <div class="courses">
                <img src="images/c1.jpg" alt="img">
                <div class="details">
                <?php
                    $query = "SELECT * FROM scholarships WHERE id=9";
                    $query_run = mysqli_query($connection,$query);
                    while($row=mysqli_fetch_array($query_run))
                    {
                    ?>
                    <span>
                        <i class="fas fa-calendar"> Deadline: <?php echo $row['Deadline']; ?></i>
                    </span>
                    <h6 class="underline-hover-effect"><a href="dashboard/scholarship"><?php echo substr($row['Scholarship Name'],0,25); ?></a></h6>
                </div>
                <div class="cost">$<?php echo $row['Amount']; ?></div>
                <div class="btn"><a href="dashboard/scholarship">Apply Now</a><?php }?></div>
            </div>
            
            <div class="courses">
                <img src="images/c2.jpg" alt="img">
                <div class="details">
                <?php
                    $query = "SELECT * FROM scholarships WHERE id=10";
                    $query_run = mysqli_query($connection,$query);
                    while($row=mysqli_fetch_array($query_run))
                    {
                    ?>
                    <span>
                        <i class="fas fa-calendar"> Deadline: <?php echo $row['Deadline']; ?></i>
                    </span>
                    <h6 class="underline-hover-effect"><a href="dashboard/scholarship"><?php echo substr($row['Scholarship Name'],0,25); ?></a></h6>
                </div>
                <div class="cost">$<?php echo $row['Amount']; ?></div>
                <div class="btn"><a href="dashboard/scholarship">Apply Now</a><?php }?></div>
            </div>
            
            <div class="courses">
                <img src="images/c3.jpg" alt="img">
                <div class="details">
                <?php
                    $query = "SELECT * FROM scholarships WHERE id=11";
                    $query_run = mysqli_query($connection,$query);
                    while($row=mysqli_fetch_array($query_run))
                    {
                    ?>
                    <span>
                        <i class="fas fa-calendar"> Deadline: <?php echo $row['Deadline']; ?></i>
                    </span>
                    <h6 class="underline-hover-effect"><a href="dashboard/scholarship"><?php echo substr($row['Scholarship Name'],0,25); ?></a></h6>
                </div>
                <div class="cost">$<?php echo $row['Amount']; ?></div>
                <div class="btn"><a href="dashboard/scholarship">Apply Now</a><?php }?></div>
            </div>
            
            <div class="courses">
                <img src="images/c4.jpg" alt="img">
                <div class="details">
                <?php
                    $query = "SELECT * FROM scholarships WHERE id=12";
                    $query_run = mysqli_query($connection,$query);
                    while($row=mysqli_fetch_array($query_run))
                    {
                    ?>
                    <span>
                        <i class="fas fa-calendar"> Deadline: <?php echo $row['Deadline']; ?></i>
                    </span>
                    <h6 class="underline-hover-effect"><a href="dashboard/scholarship"><?php echo substr($row['Scholarship Name'],0,25); ?></a></h6>
                </div>
                <div class="cost">$<?php echo $row['Amount']; ?></div>
                <div class="btn"><a href="dashboard/scholarship">Apply Now</a><?php }?></div>
                
            </div>
            <div class="courses">
                <img src="images/c5.jpg" alt="img">
                <div class="details">
                <?php
                    $query = "SELECT * FROM scholarships WHERE id=13";
                    $query_run = mysqli_query($connection,$query);
                    while($row=mysqli_fetch_array($query_run))
                    {
                    ?>
                    <span>
                        <i class="fas fa-calendar"> Deadline: <?php echo $row['Deadline']; ?></i>
                    </span>
                    <h6 class="underline-hover-effect"><a href="dashboard/scholarship"><?php echo substr($row['Scholarship Name'],0,25); ?></a></h6>
                </div>
                <div class="cost">$<?php echo $row['Amount']; ?></div>
                <div class="btn"><a href="dashboard/scholarship">Apply Now</a><?php }?></div>
                
            </div>
            <div class="courses">
                <img src="images/c6.jpg" alt="img">
                <div class="details">
                <?php
                    $query = "SELECT * FROM scholarships WHERE id=14";
                    $query_run = mysqli_query($connection,$query);
                    while($row=mysqli_fetch_array($query_run))
                    {
                    ?>
                    <span>
                        <i class="fas fa-calendar"> Deadline: <?php echo $row['Deadline']; ?></i>
                    </span>
                    <h6 class="underline-hover-effect"><a href="dashboard/scholarship"><?php echo substr($row['Scholarship Name'],0,25); ?></a></h6>
                </div>
                <div class="cost">$<?php echo $row['Amount']; ?></div>
                <div class="btn"><a href="dashboard/scholarship">Apply Now</a><?php }?></div>
                
            </div>
            
        </div>

    </section>
    <a class="gotopbtn" href="#"><i class="fa fa-angle-up"></i></a>
    <!-- Footer -->
    <footer>
        <div class="footer-col">
            <h3>Quick Links</h3>
            <a href="#"><li>Home</li></a>
            <a href="Scholarships"><li>Scholarships</li></a>
            <a href="About us"><li>About Us</li></a>
            <a href="Contact us"><li>Contact Us</li></a>
        </div>
        <div class="footer-col">
            <h3>My Account</h3>
            <a href="signin"><li>Sign In</li></a>
            <a href="dashboard/index"><li>Dashboard</li></a>
            <a href="dashboard/college_list"><li>Wish List</li></a>
            <a href="dashboard/setting"><li>Profile</li></a>
        </div>
        <div class="footer-col">
            <h3>Search By Levels</h3>
            <a href=""><li>PhD</li></a>
            <a href=""><li>Masters</li></a>
            <a href=""><li>Undergraduate</li></a>
            <a href=""><li>Diploma</li></a>
        </div>
        <div class="footer-col">
            <h3>Policies</h3>
            <a href=""><li>How it Works</li></a>
            <a href=""><li>Protection</li></a>
            <a href=""><li>Terms & Conditions</li></a>
            <a href=""><li>Personal Information</li></a>
        </div>
        <section  id="footer-row">
            <div class="follow">
                <h3>Follow us</h3>
                <div class="icons">
                <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="#" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                </div>
            </div>
            <!-- <img src="images/log.png" alt="logo" class="footer-img" > -->
            <form class="letter" action="index.php" method="post">
                <h3>Newsletter</h3>
                <p>Subscribe to Our Newsletter to get Lastest News On Scholarships</p>
                <div class="subscribe">
                    <input type="email" name="email" id="email" placeholder="Your Email Address" required>
                    <button type="submit" name="subscribe" value="subscribe" class="btn">Subscribe</button>
                </div>
            </form>
            
        </section>
        <div class="copyright">
            <p>Copyright<i class="fa fa-copyright"></i><script>document.write(new Date().getFullYear());</script> All rights reserved | Scholarly</p>
        </div>
        
    </footer>
    <script src="https://use.fontawesome.com/4cdbe91b1d.js"></script>
    <script src="script.js"></script> 
    <script src="file.js"></script>
    
</body>
</html>