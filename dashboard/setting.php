<?php
include('includes/header.php');
include('security.php'); 
?>
<body>
<div class="process">
    <aside>
        <div class="top">
            <div class="logo"  >
                <img src="images/logo.png" alt="logo" onclick="window.location.href='/scholarship/index';'popup','width=600,height=600';">
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
            
            <a href="setting" class="active">
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

                <div class="info"> <div class="info"><b><?php  echo $row['username']; ?></b></div>
            <?php }?></div>
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
<div class="wrapper2">
<input type="radio" name="slider" id="tab-1" checked>
<input type="radio" name="slider" id="tab-2" >
<input type="radio" name="slider" id="tab-3">
<header>
    <label for="tab-1" class="tab-1"><i class="fa fa-user-circle-o"></i></label>
    <label for="tab-2" class="tab-2"><i class="fa fa-sliders"></i></label>
    <label for="tab-3" class="tab-3"><i class="fa fa-graduation-cap"></i></label>
    <div class="slider"></div>
</header>
<div class="card-area">
    <div class="cards">
    <div class="row row-1">
    <div class="profile tabshow">
    <?php
                $query = "SELECT * FROM users where username ='".$_SESSION['username']."'";
                $query_run = mysqli_query($connection,$query);
                while($row=mysqli_fetch_array($query_run))
                {
                ?>
                <!-- info page -->
                <h1>Personal info</h1>
                <form action="initialize.php" method="POST">  
                <h2>First Name</h2>
                <input type="text" class="input" name="first" value="<?php  echo $row['first_name']; ?>" required placeholder="First Name">
                <h2>Last Name</h2>
                <input type="text" class="input" name="last"  value="<?php  echo $row['last_name']; ?>" required placeholder="last Name">
                <h2>Date of Birth</h2>
                <input type="date" class="input" name="date"  value="<?php  if($row['birth'] == ''){ echo '';} else{echo $row['birth'];} ?>" required>
                <h2>Gender</h2>
                <label class="custom-select">
                    <select id="" name="gender" required>
                        <option disabled selected><?php  if($row['gender'] == ''){ echo 'Select Gender';} else{echo $row['gender'];} ?></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </label>
                <label for="country"><h2>Country</h2></label>     
                <div class="countrylist">
                
                <select id="" name="country"  required><i class="fas fa-angle-down"></i>
                <option disabled selected><?php  if($row['country'] == ''){ echo 'Select Your Country';} else{echo $row['country'];} ?> </option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Åland Islands">Åland Islands</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antarctica">Antarctica</option>
                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Bouvet Island">Bouvet Island</option>
                    <option value="Brazil">Brazil</option>
                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Christmas Island">Christmas Island</option>
                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                    <option value="Cook Islands">Cook Islands</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egypt">Egypt</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                    <option value="Faroe Islands">Faroe Islands</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="French Guiana">French Guiana</option>
                    <option value="French Polynesia">French Polynesia</option>
                    <option value="French Southern Territories">French Southern Territories</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Greece">Greece</option>
                    <option value="Greenland">Greenland</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guadeloupe">Guadeloupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guernsey">Guernsey</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guinea-bissau">Guinea-bissau</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Isle of Man">Isle of Man</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jersey">Jersey</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                    <option value="Korea, Republic of">Korea, Republic of</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macao">Macao</option>
                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Martinique">Martinique</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montenegro">Montenegro</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Namibia">Namibia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherlands">Netherlands</option>
                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                    <option value="New Caledonia">New Caledonia</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Niue">Niue</option>
                    <option value="Norfolk Island">Norfolk Island</option>
                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau">Palau</option>
                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Pitcairn">Pitcairn</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Reunion">Reunion</option>
                    <option value="Romania">Romania</option>
                    <option value="Russian Federation">Russian Federation</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="Saint Helena">Saint Helena</option>
                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                    <option value="Saint Lucia">Saint Lucia</option>
                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                    <option value="Samoa">Samoa</option>
                    <option value="San Marino">San Marino</option>
                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Serbia">Serbia</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Solomon Islands">Solomon Islands</option>
                    <option value="Somalia">Somalia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                    <option value="Spain">Spain</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                    <option value="Swaziland">Swaziland</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                    <option value="Taiwan">Taiwan</option>
                    <option value="Tajikistan">Tajikistan</option>
                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Timor-leste">Timor-leste</option>
                    <option value="Togo">Togo</option>
                    <option value="Tokelau">Tokelau</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Turkmenistan">Turkmenistan</option>
                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Emirates">United Arab Emirates</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States">United States</option>
                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Viet Nam">Viet Nam</option>
                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                    <option value="Western Sahara">Western Sahara</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                    <i class="fas fa-angle-down" style="margin-left: -30px; cursor: pointer;"></i>
                </select>
                </div>
                <h2>Username</h2>
                <input type="text" class="input" name="username" value="<?php  echo $row['username']; ?>" required placeholder="Username"><br>
                <button type="submit" type="submit" name="info" class="btn9">Update</button>
                </form>
                <?php }?>

            </div>
    </div>
    <div class="row">
    <div class="setting tabshow">
        <!-- edit panel -->
                <h1>Edit Panel</h1>
                <form action="picture.php" method="POST" enctype="multipart/form-data" class="form-pic">
                <div class="profile-photo1">
                <?php
                $query = "SELECT * FROM users where username ='".$_SESSION['username']."'";
                $query_run = mysqli_query($connection,$query);
                while($row=mysqli_fetch_assoc($query_run))
                {
                    ?>
                    <?php
                    if($row['compfile'] == ''){
                    echo '<img src="profile/man.png" alt="profile" class="profile-photo">';}
                    else{
                    echo '<img src="profile/'.$row['compfile'].'" alt="profile" class="profile-photo">';}
                    ?>
                <?php }?>
                </div>
                <label for="myfile">Change Profile Picture:</label>
                <input type="file" name="compfile" class="form-control" accept=".jpeg, .jpg, .png" value="" required>
                    <button type="submit"  name="submit" class="btn10" value="Upload">Submit</button>
                </form>
                <form action="initialize.php" method="POST">
                <?php
                $query = "SELECT * FROM users where username ='".$_SESSION['username']."'";
                $query_run = mysqli_query($connection,$query);
                while($row=mysqli_fetch_array($query_run))
                {
                ?>
                <h2>Old Password</h2>
                <input id="password-field2" type="password" class="input" name="old"  placeholder="Old Password" required>
                <span toggle="#password-field2" class="fa fa-fw fa-eye field-icon toggle-password" style="margin-left: -30px; cursor: pointer;"></span>
                <h2>New Password</h2>
                <input id="password-field" type="password" name="new" class="form-control" placeholder="New Password" required>
                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" style="margin-left: -30px; cursor: pointer;"></span>
                <h2>Confirm Passowrd</h2>
                <input id="password-field1" type="password" name="cpassword" class="form-control" placeholder="Confirm Password" required>
                <span toggle="#password-field1" class="fa fa-fw fa-eye field-icon toggle-password" style="margin-left: -30px; cursor: pointer;"></span>
                <h2>Email</h2>
                <input type="email" class="input" name="email" value="<?php  echo $row['email']; ?>" placeholder="Enter Email" required><br>
                <button type="submit" type="submit" name="edit" class="btn9">Update</button>
                </form>
                <?php }?>
    </div>
    </div>
        <div class="row">
        <div class="academic tabshow">
            <!-- academics page -->
                <h1>Academic Records</h1>
                <?php
                $query = "SELECT * FROM academics where username ='".$_SESSION['username']."'";
                $query_run = mysqli_query($connection,$query);
                while($row=mysqli_fetch_array($query_run))
                {
                    ?>
                <form action="initialize.php" method="POST">
                <h2>Graduation date/expected Date</h2>
                <input type="date" name="date" class="input" value="<?php  if($row['date'] == ''){ echo 'Graduation/Expected date';} else{echo $row['date'];} ?>" required>
                <h2>University GPA out of 4</h2>
                <input type="number" name="gpa" class="input" value="<?php  if($row['score'] == ''){ echo '';} else{echo $row['score'];} ?>" min="0" max="4" placeholder="GPA" required>
                <h2>Course Studied</h2>
                <input type="text" name="course" class="input" value="<?php  if($row['course'] == ''){ echo '';} else{echo $row['course'];} ?>" placeholder="Course/degree" required>
                <h2>Learning Institution</h2>
                <input type="text" name="place" class="input" value="<?php  if($row['school'] == ''){ echo '';} else{echo $row['school'];} ?>" placeholder="University/College" required>
                <button type="submit" name="academics" class="btn9">Update</button>
                </form>
                <?php }?>
            </div>
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
    
    <form action="logout.php" method="POST" class="logout"> <a class="cancel">Cancel</a><button class="logout" type="submit" name="logout_btn">Logout</button>
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
 //  Get the a tag for cancel button
 var a = document.getElementsByClassName("cancel")[0];

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
 //  when user clicks cancel button
 $('.cancel').click(function(){
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
<script src="js/main.js"></script>
<?php
include('includes/script.php');
include('includes/footer.php');
?>