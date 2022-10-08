<?php
include('includes/header.php'); 
include('includes/sidebar.php'); 
date_default_timezone_set('Africa/Nairobi');
$currentTime = date( 'd-m-Y h:i:s A', time () );
?>
        <!-- main section -->
        <main>
            <h1>Dashboard</h1>
            <div class="greet">
                <span class="material-icons-sharp">
                    waving_hand
                    </span>
                <h2>Hello Nielsen</h2>
            </div>
            <div class="insights">
                <!-- wallet -->
                <div onclick="window.location.href='/scholarship.php';" class="wallet" >
                    <span class="material-icons-sharp">
                        payments
                        </span>
                        <div class="middle">
                            <div class="left">
                                <h3>Wallet Balance</h3>
                                <h1>Kes 100</h1>
                            </div>
                        </div>
                </div>
                <!-- message us -->
                <div class="text">
                    <span class="material-icons-sharp">
                        send
                        </span>
                        <div class="middle">
                            <div class="left">
                                <h3>Write us a message</h3>
                                <h1>Message</h1>
                            </div>
                        </div>
                </div>
                <!-- find scholarships -->
                <div class="search">
                    <span class="material-icons-sharp">
                        search
                        </span>
                        <div class="middle">
                            <div class="left">
                                <h3>Find Scholarships</h3>
                                <h1>Scholarships</h1>
                            </div>
                        </div>
                </div>
            </div>
            <!-- end of insights -->
            <div class="like">
                <h2>My Scholarship wishlist</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Award</th>
                            <th>Deadline</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr>
                            <td>Charity Hopes</td>
                            <td>$1000</td>
                            <td>5th December</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Charity Hopes</td>
                            <td>$1000</td>
                            <td>5th December</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Charity Hopes</td>
                            <td>$1000</td>
                            <td>5th December</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Charity Hopes</td>
                            <td>$1000</td>
                            <td>5th December</td>
                            <td class="primary">Details</td>
                        </tr>
                    </tbody> -->
                </table>
                <a href="#">Show all</a>
            </div>
        </main>
        <!-- end of main -->
        <div class="right">
            <div class="top">
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
                <div class="profile">
                    <div class="info"><b>Nielsen</b></div>
                    <div class="profile-photo">
                        <img src="images/man.png" alt="">
                    </div>
                </div>
            </div>
            <!-- end of top -->
            <div class="levels">
                <h2> Search by degree Levels</h2>
                <div class="level">
                    <div class="type">
                        <div class="profile-photo">
                            <img src="images/phd.jpg" alt="">
                        </div>
                        <div class="message">
                            <p> <b>PhD</b> - Doctorate</p>
                        </div>
                    </div>
                    <div class="type">
                        <div class="profile-photo">
                            <img src="images/masters.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Masters</b> - Graduate</p>
                        </div>
                    </div>
                    <div class="type">
                        <div class="profile-photo">
                            <img src="images/bachelor.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Bachelors</b> - Undergraduate</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of levels -->
            <div class="shortcuts">
                <h2>Shortcuts</h2>
                <div class="process">
                    <div class="icon">
                    <span class="material-icons-sharp">
                        swap_horiz
                        </span>
                    </div>
                    <div class="right">
                        <div class="info"><h3>Application Process</h3></div>

                    </div>

                </div>
                <!-- end of process -->
                <div class="process">
                    <div class="return">
                    <span class="material-icons-sharp">
                        currency_exchange
                        </span>
                    </div>
                    <div class="right">
                        <div class="info"><h3>Request Refund</h3></div>

                    </div>

                </div>
                <!-- end of refund -->
                <div class="process">
                    <div class="help">
                    <span class="material-icons-sharp">
                        info
                        </span>
                    </div>
                    <div class="right">
                        <div class="info"><h3>Help</h3></div>

                    </div>

                </div>
                <!-- end of Help -->
                <div class="load">
                    <div>
                    <span class="material-icons-sharp">
                        add
                        </span>
                        <h3>Load Wallet</h3>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include('includes/footer.php');
        ?>