<?php
include('includes/header.php'); 
?>
<body>
    <div class="scholar">
        <aside>
            <div class="top">
                <div class="logo"  >
                    <img src="images/logo.png" alt="logo" onclick="window.location.href='/scholarship/index.html';">
                    <h2>SCHO<span class="primary">LARLY </span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="index.php">
                    <span class="material-icons-sharp">
                        home
                        </span>
                        <h3>Dashboard</h3>
                </a>
                <a href="scholarship.php">
                    <span class="material-icons-sharp">
                        monetization_on
                        </span>
                        <h3>Scholarships</h3>
                </a>
                <a href="list.php">
                    <span class="material-icons-sharp">
                        checklist_rtl
                        </span>
                        <h3>My College List</h3>
                </a>
                <a href="process.php">
                    <span class="material-icons-sharp">
                        <!-- swap_horizschool -->school
                        </span>
                        <h3>Application Process</h3>
                </a>
                <a href="message.php">
                    <span class="material-icons-sharp">
                        message
                        </span>
                        <h3>Message us</h3>
                        
                </a>
                <a href="alert.php">
                    <span class="material-icons-sharp">
                        notifications_active
                        </span>
                        <h3>Notifications</h3>
                        <span class="message-count">0</span>
                </a>
                
                <a href="setting.php">
                    <span class="material-icons-sharp">
                        settings
                        </span>
                        <h3>settings</h3>
                </a>
                <a href="#">
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
                    <button id="menu-btn">
                        <span class="material-icons-sharp">
                            menu
                            </span>
                    </button>
                    <div class="theme-toggler">
                        <span class="material-icons-sharp active">
                            light_mode
                            </span>
                            <span class="material-icons-sharp">
                            dark_mode
                            </span>
                    </div>
                </div>
                <div class="wallet">
                    
                </div>
          
           
        </main>
    <?php
    include('includes/footer.php');
    ?>