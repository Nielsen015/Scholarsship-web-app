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
                <a href="wallet" class="">
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
                      <!-- <form action="logout.php" method="POST" class="logout"> -->
                      <button class="logout myBtn" type="submit" name="logout_btn">
            
            <span class="click-me material-icons-sharp">
                logout
                </span> <h3>Logout</h3>
                
        </button>
        
        <!-- </form> -->
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
<style>
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 150px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  justify-content: center;
  align-items: center;
}

/* Modal Content */
.modal-content {
  background-color: var(--color-background);
  margin: auto;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  padding: 30px 50px;
  border: 1px solid #888;
  width: 600px;
  max-width: 100%;
  text-align: center;
}

/* The Close Button */
.close {
  color: var(--color-primary);
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: var(--color-danger);
  text-decoration: none;
  cursor: pointer;
}
/* .myBtn {
  background-color: #24306e;
  border: 0;
  border-radius: 20px;
  color: white;
  padding: 5px 10px;
  text-align: center;
  margin-left: 6.6rem;
  margin-top: 0.8rem;
}
.myBtn:hover{
   color: #24306e;
   background-color: white;
   border: 1px solid var(--color-primary);
} */
.modal-content h2 {
   margin: 0;
   color: var(--color-primary);
}
.modal-content p {
  font-size: 14px;
  font-weight: 500;
  /* opacity: 0.7; */
  margin-bottom: 15px;
  color: var(--color-dark);
}
.modal-content i{
    color: var(--color-danger);
    font-size: 25px;
    margin-top: 1rem;
    margin-bottom: 1rem;
    align-items: center
}
.modal-content a {
    background-color: #24306e;
    border-radius: 5px;
    color: white;
    font-size: 14px;
    padding: 5px 8px;
    /* margin-top: 8px; */
    /* padding-top: 1rem; */
}
.modal-content a:hover{
   color: #24306e;
   background-color: white;
   border: 1px solid var(--color-primary);
}
/* logout button */
.modal-content button{
    background-color: #be2326;
    border-radius: 5px;
    color: white;
    font-size: 14px;
    padding: 5px 8px;
    margin-left: 1rem;
    font-family: "Poppins", sans-serif;
}
.modal-content button:hover{
   color: #24306e;
   background-color: white;
   border: 1px solid var(--color-primary);
}
.modal-content .buttons{
    flex-direction: row;
    display: block;
    justify-content: space-between;
}
</style>
<!-- The Modal <i class='bx bx-x'> -->
<div id="myModal" class="modal">
  <!-- Modal content -->

  <div class="modal-content">
     <span class="close">&times;</span>

                        <h2>Ready to leave?</h2><i class="fa fa-sign-out"></i>
                        <p>Select "Logout" below if you are ready to end your current session, or "cancel" if you are not sure.</p>
                
    <div class="buttons">         
        
        <form action="logout.php" method="POST" class="logout"> <a href="">Cancel</a><button class="logout" type="submit" name="logout_btn">Logout</button>
        </form>
    </div>
  </div>

</div>
<script>
// Get the modal
 var modal = document.getElementById("myModal");

 // Get the button that opens the modal
 var btn = document.getElementsByClassName("myBtn");

 // Get the <span> element that closes the modal
 var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
for (var i = 0; i < btn.length; i++) {
  btn[i].onclick = function() {
    modal.style.display = "block";
  }
} 
//  btn.onclick = function() {
//    modal.style.display = "block";
//  }

// When the user clicks on <span> (x), close the modal
 $('.close').click(function(){
   modal.style.display = "none";
 })
//  span.onclick = function() {
//    modal.style.display = "none";
//  }

 // When the user clicks anywhere outside of the modal, close it
//  window.onclick = function(event) {
//   if (event.target == modal) {
//      modal.style.display = "none";
//    }
//  }


</script>
    <script src="script.js"></script>
</body>
</html>