<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarly</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/icon type">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/pass.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="forgot-password" method="POST" autocomplete="">
                    <h2 class="text-center">Forgot Password?</h2>
                    <p class="text-center">We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
                    <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Enter email address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-email" value="Continue"><br>
                        <div class="link forget-pass text-center"><a href="signin">Back to Sign in</a></div>
                    <div class="link login-link text-center">Not Registered? <a href="signup">Signup now</a></div>
                     
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>