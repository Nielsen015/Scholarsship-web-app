<?php
include('includes/header.php');
include('security.php'); 
?>
<body>
    <div class="process">
        <aside>
            <div class="top">
                <div class="logo"  >
                    <img src="images/logo.png" alt="logo" onclick="window.location.href='/scholarship/index';">
                    <h2>SCHO<span class="primary">LARLY </span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="index">
                    <span class="material-icons-sharp">
                        home
                        </span>
                        <h3>Dashboard</h3>
                </a>
                <a href="scholarship">
                    <span class="material-icons-sharp">
                        monetization_on
                        </span>
                        <h3>Scholarships</h3>
                </a>
                <a href="wallet">
                    <span class="material-icons-sharp">
                        account_balance_wallet
                        </span>
                        <h3>Wallet</h3>
                </a>
                <a href="college_list">
                    <span class="material-icons-sharp">
                        checklist_rtl
                        </span>
                        <h3>My College List</h3>
                </a>
                <a href="process" class="active">
                    <span class="material-icons-sharp">
                        <!-- swap_horizschool -->school
                        </span>
                        <h3>Application Process</h3>
                </a>
                <a href="message">
                    <span class="material-icons-sharp">
                        message
                        </span>
                        <h3>Message us</h3>
                        
                </a>
                <a href="alert">
                    <span class="material-icons-sharp">
                        notifications_active
                        </span>
                        <h3>Notifications</h3>
                        <span class="message-count"><?php 
                            $query = "SELECT * FROM alert WHERE username='".$_SESSION['username']."' AND  state=0";
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            {?><?php echo $row; ?></span><?php } ?>
                </a>
                
                <a href="setting">
                    <span class="material-icons-sharp">
                        settings
                        </span>
                        <h3>settings</h3>
                </a>
                <a href="/scholarship/signin" onclick="return confirm('Are you sure you want to logout?');">
                    <span class="material-icons-sharp">
                        logout
                        </span>
                        <h3>Logout</h3>
                </a>
            </div>
        </aside>
    <main>
        <div class="wrapper1">
            <div class="text"><h2>Application Process Procedure</h2></div>
            <div class="center-line">
                <a href="#" class="scroll-icon"><i class="fa-solid fa-caret-up"></i></a>
            </div>
            <div class="row row-1">
                <section>
                <i class=" icon fa-solid fa-right-to-bracket"></i>
                    <div class="details">
                        <span class="title">Log into Your Accout</span>
                        <span>Login Page</span>
                    </div>
                    <p>User is required to log into his/her account before doing any application. If not registered with us, one is required to create a new account.</p>
                    <div class="bottom">
                        <a href="index">Dashboard</a>
                    </div>
                </section>
            </div>
            <div class="row row-2">
                <section>
                <i class=" icon fa-solid fa-wallet"></i>
                    <div class="details">
                        <span class="title">Confirm Your Wallet</span>
                        <span>Wallet Page</span>
                    </div>
                    <p>You will have to Confirm whether Your wallet Balance reads 100/= Kenya Shillings. Get in touch incase of difficulties.</p>
                    <div class="bottom">
                        <a href="wallet">Wallet</a>
                    </div>
                    
                </section>
            </div>
            <div class="row row-1">
                <section>
                <i class="icon fa-solid fa-sack-dollar"></i>
                    <div class="details">
                        <span class="title">Load Your Wallet</span>
                        <span>Payment page</span>
                    </div>
                    <p>Incase your wallet balance is at zero, then you need to load it up through our secure payment gateways.</p>
                    <div class="bottom">
                        <a href="pay">Load Wallet</a>
                    </div>
                </section>
            </div>
            <div class="row row-2">
                <section>
                <i class="icon fa-solid fa-user-graduate"></i>
                    <div class="details">
                        <span class="title">Find Scholarships</span>
                        <span>Scholarships page</span>
                    </div>
                    <p>You can easily check our scholarship page to find a scholarship that suits your needs.Check the Eligibility of the scholarship to ensure you qualify.</p>
                    <div class="bottom">
                        <a href="scholarship">Scholarship Page</a>
                    </div>
                    
                </section>
            </div>
            <div class="row row-1">
                <section>
                <i class="icon fa-solid fa-question"></i>
                    <div class="details">
                        <span class="title">Need Help?</span>
                        <span>Contact Page</span>
                    </div>
                    <p>Stuck or frustrated?We are there to assist you. You can easily send us a message through the dashboard or contact us on email.</p>
                    <div class="bottom">
                        <a href="message">Message us</a>
                    </div>
                    
                </section>
            </div>
        </div>
        <div class="theme">
            <div class="top1">
                <button id="menu-btn" class="ham">
                    <span class="material-icons-sharp">
                        menu
                        </span>
                </button>
                
                <div class="profile">
                    <div class="theme-toggler">
                    <span class="material-icons-sharp active">
                        light_mode
                        </span>
                        <span class="material-icons-sharp">
                        dark_mode
                        </span>
                </div>
                <?php
                    $query = "SELECT * FROM users where username ='".$_SESSION['username']."'";
                    $query_run = mysqli_query($connection,$query);
                    while($row=mysqli_fetch_array($query_run))
                    {
                    ?>
                    <div class="info"><b><?php  echo $row['username']; ?></b><?php }?></div>
                    <div class="profile-photo">
                    <?php
                    $query = "SELECT * FROM users where username ='".$_SESSION['username']."'";
                    $query_run = mysqli_query($connection,$query);
                    while($row=mysqli_fetch_assoc($query_run))
                    {
                      ?>
                      
                      <?php
                      if($row['compfile'] == ''){
                        echo '<img src="profile/man.png" alt="profile" class="profile-photo">';}
                        // echo $default;}
                      else{
                       echo '<img src="profile/'.$row['compfile'].'" alt="profile" class="profile-photo">';}
                       ?>
                 <?php }?>
                    </div>
                </div>
            </div>
    </main>

<?php
include('includes/footer.php');
?>