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
                <form action="logout.php" method="POST" class="logout">
                <button class="logout" type="submit" name="logout_btn">
                
                    <span class="click-me material-icons-sharp">
                        logout
                        </span> <h3>Logout</h3>
                       
                </form>
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
        </div>
    <div class="wrapper">
    <input type="radio" name="slider" id="tab-1" checked>
    <input type="radio" name="slider" id="tab-2" >
    <input type="radio" name="slider" id="tab-3">
    <header>
      <label for="tab-1" class="tab-1">Wallet</label>
      <label for="tab-2" class="tab-2">Refund</label>
      <label for="tab-3" class="tab-3">History</label>
      <div class="slider"></div>
    </header>
    <div class="card-area">
      <div class="cards">
        <div class="row row-1">
          <div class="price-details">
            <span class="price">100</span>
            <p>Total Balance</p>
          </div>
          <ul class="features">
            <li><i class="fas fa-check"></i><span>Use your balance to Apply for numerous Scholarships</span></li>
            <li><i class="fas fa-check"></i><span>You can Request for a refund on certain terms</span></li>
            <li><i class="fas fa-check"></i><span>Payment is done via mobile money i.e M-pesa, Airtel Money</span></li>
            <li><i class="fas fa-check"></i><span>Secure Gateway for all transactions</span></li>
          </ul>
          <button onclick="window.location.href='pay';" >Load wallet</button>
        </div>
        <div class="row">
        <div class="refund">
            <span class="material-icons-sharp">
            currency_exchange
            </span>
                <p>Refund Request</p>
          </div>
          <ul class="features">
            <li><i class="fas fa-check"></i><span>Refund should  be done within 20 days</span></li>
            <li><i class="fas fa-check"></i><span>Refund can not be processed after Application of scholarship</span></li>
            <li><i class="fas fa-check"></i><span>Money is refunded by us within 3 days</span></li>
            <li><i class="fas fa-check"></i><span>Message us incase you need help</span></li>
          </ul>
          <button>Request a Refund</button>
        </div>
            <div class="row">
            <div class="history">
                <span class="material-icons-sharp">
                history
                </span>
                <p>Transaction History</p>
            </div>
                <table>
                    <thead>
                        <tr>
                            <th class="date">Date</th>
                            <th class="platform">Platform</th>
                            <th class="type">Type</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td>5/10/2022</td>
                    <td>M-pesa</td>
                    <td>Load</td>
                    </tr>
                    <tr>
                    <td>5/10/2022</td>
                    <td>M-pesa</td>
                    <td>Load</td>
                    </tr>
                    <tr>
                    <td>5/10/2022</td>
                    <td>M-pesa</td>
                    <td>Load</td>
                    </tr>
                    <tr>
                    <td>5/10/2022</td>
                    <td>M-pesa</td>
                    <td>Load</td>
                    </tr>
                    <tr>
                    <td>5/10/2022</td>
                    <td>M-pesa</td>
                    <td>Load</td>
                    </tr>
                    
                </tbody>
            </table>
            <button>Clear History</button>
            </div>
            </div>
            
        </div>
            
    </div>
          
           
        </main>
</div>
    <script src="script.js"></script>
</body>
</html>