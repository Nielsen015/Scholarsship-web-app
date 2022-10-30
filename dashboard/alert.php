<?php
include('includes/header.php');
?>
<body>
    <div class="process">
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
                <a href="wallet.php">
                    <span class="material-icons-sharp">
                        account_balance_wallet
                        </span>
                        <h3>Wallet</h3>
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
                <a href="alert.php" class="active">
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
                <a href="/scholarship/signin.php" onclick="return confirm('Are you sure you want to logout?');">
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
                    <div class="info"><b>Nielsen</b></div>
                    <div class="profile-photo">
                        <img src="images/man.png" alt="">
                    </div>
                </div>
            </div>
            <div class="table">
                <div class="table-header">
                    <p>My Wish List </p>
                    <div class="search-bar">
                        <input type="text" placeholder="Type to search">
                        <i class="fa fa-search"></i>
                    </div>
                </div>
                <div class="table-section">
                    <table>
                        <thead>
                            <tr>
                                <th>Serial</th>
                                <th>Message Status</th>
                                <th>Date Sent</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>1</td>
                            <td> Not Read</td>
                            <td>5 December 2022</td>
                            <td><button>Read</button>
                            <button><i class="fa-solid fa-trash"></i></button>
                            </td>
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
?>