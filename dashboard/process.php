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
                <a href="process.php" class="active">
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
    <main>
        <div class="top">
            <div class="theme">
                <button id="menu-btn" class="ham">
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
                
                <div class="profile">
                    <div class="info"><b>Nielsen</b></div>
                    <div class="profile-photo">
                        <img src="images/man.png" alt="">
                    </div>
                </div>
            </div>
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
                        <a href="index.php">Dashboard</a>
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
                        <a href="wallet.php">Wallet</a>
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
                        <a href="load.php">Load Wallet</a>
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
                        <a href="scholarship.php">Scholarship Page</a>
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
                        <a href="message.php">Message us</a>
                    </div>
                    
                </section>
            </div>
        </div>
    </main>

<?php
include('includes/footer.php');
?>