<?php
include('includes/header.php'); 
include('security.php'); 
?>
<body>
    <div class="scholar">
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
                <a href="wallet" class="active">
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
                <a href="process">
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
                            $query = "SELECT * FROM alert WHERE username='".$_SESSION['username']."' AND  status=0";
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
        <!-- main section -->
        <main>
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
                    <div class="info"><b><?php  echo $row['username']; ?></b></div><?php }?>
                    <div class="profile-photo">
                    <?php
                    $query = "SELECT * FROM users where username ='".$_SESSION['username']."'";
                    $query_run = mysqli_query($connection,$query);
                    while($row=mysqli_fetch_assoc($query_run))
                    {
                        $default = "profile/default.jpg";
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
    <div class="wrapper3">
    <input type="radio" name="slider" id="hill-1" checked>
    <input type="radio" name="slider" id="hill-2" >
    <header class="header">
      <label for="hill-1" class="hill-1">Mpesa</label>
      <label for="hill-2" class="hill-2">Airtel Money</label>
      <div class="slider"></div>
    </header>
    <div class="card-area">
      <div class="cards">
        <div class="row row-1">
          <div class="price-details">
            <img src="images/mpesa.png" alt="">
            <p>M-pesa Wallet</p>
          </div>
          <form action="" class="pay_form">
            <h5>Amount(minimum 100)</h5>
            <input type="number" placeholder="Enter Amount" value="100" min="100" required>
            <h5>Enter Your M-pesa Number</h5>
            <input input type="tel" id="phone" name="phone" pattern="[0-7]{2}[0-9]{8}" required placeholder="0712345678">
          <button>Pay</button>
          </form>
        </div>
        <div class="row">
        <div class="price-details">
            <img src="images/airtelm.png" alt="logo">
                <p>Airtel Wallet</p>
          </div>
          <form action="initiate_sdk.php" class="pay_form">
            <h5>Amount(minimum 100)</h5>
            <input type="number" placeholder="Enter Amount" value="100" required>
            <h5>Enter Your Airtel Money Number</h5>
            <input type="tel" id="phone" name="phone" pattern="[0-7]{2}[0-9]{8}" required placeholder="0712345678">
          <button>Pay</button>
          </form>
        </div>
            </div>
            
        </div>
            
    </div>
          
           
        </main>
</div>
    <script src="script.js"></script>
</body>
</html>