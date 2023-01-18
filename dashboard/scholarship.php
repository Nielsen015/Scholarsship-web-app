<?php
include('security.php');
include('includes/header.php'); 

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
                <a href="#" class="active">
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
                //  include('includes/dbconfig.php');
                //  $query = "SELECT * FROM scholarships";
                //  $query_run = mysqli_query($connection,$query);
                ?>
                <?php
                    $query = "SELECT * FROM users where username ='".$_SESSION['username']."'";
                    $query_run = mysqli_query($connection,$query);
                    while($row=mysqli_fetch_array($query_run))
                    {
                    ?>
                    <div class="info"><b><?php  echo $row['username']; ?></b><?php }?></div>
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
        </div>
            <div class="card-deck">
                <div class="results">
                <?php
             $query = "SELECT id FROM scholarships ORDER BY id";  
             $query_run = mysqli_query($connection, $query);
             $row = mysqli_num_rows($query_run);
             echo'<h2>'.$row.'<span> results </span></h2>'; ?>
                </div>
                <div class="search-form">
                    <form action="" class="search-bar">
                        <input type="text" placeholder="Type to Search" name="q" class="text">
                        <i class="fa fa-search"></i>
                    </form>
                </div>
                <?php
                    $query = "SELECT * FROM scholarships";
                    $query_run = mysqli_query($connection,$query);
                    
                    ?>
                <div class="card-content" > 
                <?php
                    // $query = "SELECT * FROM scholarships WHERE id=1";
                    //$query_run = mysqli_query($connection,$query);
                    while($row=mysqli_fetch_array($query_run))
                    {
                    ?>
                    <div class="card">
                    <?php
                    // while($row=mysqli_fetch_array($query_run))
                    // {
                    ?>
                        <div class="info">
                        <?php
                    // $query = "SELECT * FROM scholarships WHERE id=1";
                    // $query_run = mysqli_query($connection,$query);
                    // while($row=mysqli_fetch_array($query_run))
                    // {
                    ?>
                        <h3>$<?php echo $row['Amount']; ?></h3>
                        <h2 class="underline-hover-effect"><?php echo substr($row['Scholarship Name'],0,40); ?></h2>
                        <!-- <h2>PhD Scholarship</h2> -->
                        </div>
                        <div class="date">
                            <span class="material-icons-sharp">
                                calendar_month
                                </span>
                            <h3>Deadline: <?php echo $row['Deadline'];?> </h3>
                        </div>
                        
                        <button class="myBtn btn">View details<button>
                        <button id="btnh1" class="heart"><span class="material-icons-sharp">
                        favorite
                        </span></i>
                        </button>
                    
                        <?php //}?>
                    </div>
                    <?php }?>
                     
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
  /* opacity: 0.7; */
  margin-bottom: 15px;
  color: var(--color-dark);
}
.modal-content a {
    background-color: #24306e;
    border-radius: 25px;
    color: white;
    font-size: 12px;
    padding: 5px 8px;
    /* margin-top: 8px; */
    /* padding-top: 1rem; */
}
.modal-content a:hover{
   color: #24306e;
   background-color: white;
   border: 1px solid var(--color-primary);
}
</style>



<!-- The Modal <i class='bx bx-x'> -->
<div id="myModal" class="modal">
  <!-- Modal content -->

  <div class="modal-content">
     <span class="close">&times;</span>
        <?php
    if(isset($_GET['id_no']))
    {
        $main_id = $_GET['id_no'];
    }
    ?>
    <?php
                    $query = "SELECT * FROM scholarships WHERE id=$main_id";
                    $query_run = mysqli_query($connection,$query);
                    while($row=mysqli_fetch_array($query_run))
                    {
                    ?>
                        <h2><?php echo $row['Scholarship Name']; ?></h2>
                        <p><?php echo $row['Description']; ?></p>
                
                       
        <a href="<?php echo $row['Link']; ?>" target="_blank">Apply Now</a><?php }?>
  </div>

</div>
          
           
        </main>
        <!-- end of main -->
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
 window.onclick = function(event) {
  if (event.target == modal) {
     modal.style.display = "none";
   }
 }


</script>
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
               var paginationSize = 7; //how many page elements visible in the pagination
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

               $(document).on("click", ".pagination li.current-page:not(.active)", function(){
                return showPage(+$(this).text());
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