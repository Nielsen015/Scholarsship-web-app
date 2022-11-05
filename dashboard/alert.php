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
                <a href="alert" class="active">
                    <span class="material-icons-sharp">
                        notifications_active
                        </span>
                        <h3>Notifications</h3>
                        <?php 
                            $query = "SELECT * FROM alert WHERE username='".$_SESSION['username']."' AND  status=0";
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            {?>
                        <span class="message-count"><?php echo $row; ?></span>
                        <?php } ?>
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
                    <div class="info"><b><?php  echo $row['username']; ?></b><?php }?></b></div>
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
            <div class="table">
                <div class="table-header">
                    <p>Notification Panel </p>
                    <div class="search-bar">
                        <input type="text" placeholder="Type to search">
                        <i class="fa fa-search"></i>
                    </div>
                </div>
                <div class="table-section">
                <?php
                $sr_no=1;
                $query = "SELECT * FROM alert WHERE username='".$_SESSION['username']."'";
                $query_run = mysqli_query($connection,$query);

                 ?>
                    <table>
                        <thead>
                            <tr>
                                <th>Serial</th>
                                <th>Subject</th>
                                <th>Message info</th>
                                <th>Date Sent</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                while($row = mysqli_fetch_assoc($query_run))
                                {
                        ?>
                            <tr>
                            <td><?php echo $sr_no++; ?></td>
                            <td><?php echo $row['subject']; ?></td>
                            <td><?php 
                    $main_result=$row['status'];
                    if($main_result==1)
                    { ?>
                     <button type="button" class="state btn-success" style="color: #fff; background: #46B469;">Already Read</button>
                    <?php }
                  if($main_result=="0"){ ?>
                   <button type="button" class="state btn-warning" style="color: #fff; background: #be2326;"> Not Read</button>
                  <?php } ?></td>
                            <td><?php echo $row['date']; ?></td>
                            <td><div class="btn_a"><a href="Open_message? id=<?php echo $row['id'];?>"><button>Read</button></a><form action="initialize.php" method="post"><input type="hidden" name="delete_text" value="<?php echo $row['id']; ?>">
                            <button class="delete"type="submit" name="delete_textbtn"><i class="fa-solid fa-trash"></i></button></form></div></td>
                            <div class="echo_text">
                            <?php
                        }
                    } 
                    else{
                         echo "<p style='color: #be2326; font-size: 18px;'>No Messages Found</p>";
                    }
                    ?>
                            </div>
                            
                            </tr>
                            
                        </tbody>
                    </table>
                    <div class="pagination">
                    <div><i class="fa-solid fa-angles-left"></i></div>
                    <div><i class="fa-solid fa-chevron-left"></i></div>
                    <div>1</div>
                    <div>2</div>
                    <div><i class="fa-solid fa-angles-right"></i></div>
                    <div><i class="fa-solid fa-chevron-right"></i></div>
                </div>
                </div>
                
            </div>
    </main>

<?php
include('includes/footer.php');
include('includes/script.php');
?>