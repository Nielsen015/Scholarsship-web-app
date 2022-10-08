<?php
include('includes/header.php'); 
?>
<body>
    <div class="scholar">
        <aside>
            <div class="top">
                <div class="logo"  >
                    <img src="images/logo.png" alt="logo" onclick="window.location.href='/index.html';">
                    <h2>SCHO<span class="primary">LARLY </span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="#">
                    <span class="material-icons-sharp">
                        home
                        </span>
                        <h3>Dashboard</h3>
                </a>
                <a href="#" class="active">
                    <span class="material-icons-sharp">
                        monetization_on
                        </span>
                        <h3>Scholarships</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        account_balance_wallet
                        </span>
                        <h3>Wallet</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        checklist_rtl
                        </span>
                        <h3>My College List</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        <!-- swap_horizschool -->school
                        </span>
                        <h3>Application Process</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        message
                        </span>
                        <h3>Message us</h3>
                        
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        notifications_active
                        </span>
                        <h3>Notifications</h3>
                        <span class="message-count">0</span>
                </a>
                
                <a href="#">
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
            <div class="container">
                <!-- <div class="card-content">
                    <div class="card">
                        <div class="info">
                        <h3>$10,000</h3>
                        <h2 class="underline-hover-effect">Havard Scholarship</h2>
                        <h2>PhD Scholarship</h2>
                        </div>
                        
                        <div class="date">
                            <span class="material-icons-sharp">
                                calendar_month
                                </span>
                            <h3>Deadline: December 5, 2022</h3>
                        </div>
                        <div class="btn"><a href="#">View details</a></div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card">
                        <div class="info">
                        <h3>$10,000</h3>
                        <h2 class="underline-hover-effect">Havard Scholarship</h2>
                        <h2>PhD Scholarship</h2>
                        </div>
                        
                        <div class="date">
                            <span class="material-icons-sharp">
                                calendar_month
                                </span>
                            <h3>Deadline: December 5, 2022</h3>
                        </div>
                        <div class="btn"><a href="#">View details</a></div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card">
                        <div class="info">
                        <h3>$10,000</h3>
                        <h2 class="underline-hover-effect">Havard Scholarship</h2>
                        <h2>PhD Scholarship</h2>
                        </div>
                        
                        <div class="date">
                            <span class="material-icons-sharp">
                                calendar_month
                                </span>
                            <h3>Deadline: December 5, 2022</h3>
                        </div>
                        <div class="btn"><a href="#">View details</a></div>
                    </div>
                </div> -->
                <div class="pagination">
                    <li class="page-item previous-page disable"><a class="page-link" href="#">Prev</a></li>
                    <li class="page-item current-page active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item dots"><a class="page-link" href="#">...</a></li>
                    <li class="page-item current-page"><a class="page-link" href="#">5</a></li>
                    <li class="page-item current-page"><a class="page-link" href="#">6</a></li>
                    <li class="page-item dots"><a class="page-link" href="#">...</a></li>
                    <li class="page-item current-page"><a class="page-link" href="#">10</a></li>
                    <li class="page-item next-page"><a class="page-link" href="#">Next</a></li>
                </div>
            </div>
           
        </main>
        <!-- end of main -->
    <?php
    include('includes/footer.php');
    ?>