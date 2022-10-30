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
                <a href="#" class="active">
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
                <a href="/scholarship/signin.php" onclick="return confirm('Are you sure you want to logout?');">
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
                    <div class="info"><b>Nielsen</b></div>
                    <div class="profile-photo">
                        <img src="images/man.png" alt="">
                    </div>
                </div>
            </div>
            <div class="card-deck">
                <div class="results">
                    <h2>3000 <span>results</span></h2>
                </div>
                <div class="search-form">
                    <form action="" class="search-bar">
                        <input type="text" placeholder="Type to Search" name="q" class="text">
                        <i class="fa fa-search"></i>
                    </form>
                </div>
                <div class="card-content" style="display: none;" > 
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button onclick="Toggle1()" id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div> <div class="card">
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div> <div class="card">
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
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
                        <button onclick="myFunction()" id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    </div>
                </div>
                <div class="pagination">
                    <!-- <li class="page-item previous-page disable"><a class="page-link" href="#">Prev</a></li>
                    <li class="page-item current-page active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item dots"><a class="page-link" href="#">...</a></li>
                    <li class="page-item current-page"><a class="page-link" href="#">5</a></li>
                    <li class="page-item current-page"><a class="page-link" href="#">6</a></li>
                    <li class="page-item dots"><a class="page-link" href="#">...</a></li>
                    <li class="page-item current-page"><a class="page-link" href="#">10</a></li>
                    <li class="page-item next-page"><a class="page-link" href="#">Next</a></li> -->
                </div>
               
            </div>
          
           
        </main>
        <!-- end of main -->
        <script type="text/javascript">
            function getPageList(totalPages, page, maxLength){
                function range(start, end){
                    return Array.from(Array(end - start + 1), (_, i) => i + start);
                }
                var sideWidth = maxLength < 9 ? 1 : 2;
                var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
                var rightWidth = (maxLength - sideWidth * 2 - 3) >> 1;

                if(totalPages <= maxLength){
                    return range(1, totalPages);
                }

                if(page <= maxLength - sideWidth - 1 - rightWidth){
                    return range(1, maxLength - sideWidth - 1).concat(0, range(totalPages - sideWidth + 1, totalPages));
                }

                if(page >= totalPages - sideWidth - 1 - rightWidth){
                    return range(1, sideWidth).concat(0, range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages));
                }

                return range(1, sideWidth).concat(0, range(page - leftWidth, page + rightWidth), 0, range(totalPages - sideWidth + 1, totalPages));
            }

            $(function(){
               var numberOfItems = $(".card-content .card").length;
               var limitPerPage = 9; //number of cards per page
               var totalPages = Math.ceil(numberOfItems / limitPerPage);
               var paginationSize = 5; //how many page elements visible in the pagination
               var currentPage;

               function showPage(whichPage){
                if(whichPage < 1 || whichPage > totalPages) return false;
                currentPage = whichPage;

                $(".card-content .card").hide().slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage).show();

                $(".pagination li").slice(1, -1).remove();

                getPageList(totalPages, currentPage, paginationSize).forEach(item => {
                    $("<li>").addClass("page-item").addClass(item ? "current-page" : "dots")
                    .toggleClass("active", item === currentPage).append($("<a>").addClass("page-link")
                    .attr({href:"javascript:void(0)"}).text(item || "..." )).insertBefore(".next-page");
                });

                $(".previous-page").toggleClass("disable", currentPage === 1);
                $(".next-page").toggleClass("disable", currentPage === totalPages);
                return true;
               }

               $(".pagination").append(
                $("<li>").addClass("page-item").addClass("previous-page").append($("<a>").addClass("page-link").attr({href: "javascript:void(0)"}).text("Prev")),
                $("<li>").addClass("page-item").addClass("next-page").append($("<a>").addClass("page-link").attr({href: "javascript:void(0)"}).text("Next"))
              );

               $(".card-content").show();
               showPage(1);

               $(document).on("click", ".paginaton li.current-page:not(.active)", function(){
                return showPage(+$(currentPage).text());
               });
               
               
               $(".next-page").on("click", function(){
                return showPage(currentPage + 1);
               });
               $(".previous-page").on("click", function(){
                return showPage(currentPage - 1);
               });
            });
        </script>
    <?php
    include('includes/footer.php');
    ?>