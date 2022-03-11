<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    
<title>Login | Phillips Outsourcing Employer's Portal</title>
    
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="dist/css/bootstrap.css">

<link href="dist/font-awesome/css/all.css" rel="stylesheet" type="text/css">

<link rel="icon" href="images/favicon.ico" />

<link href="dist/css/animate.css" rel="stylesheet">

<link href="dist/css/owl.carousel.css" rel="stylesheet">

<link href="dist/css/owl.theme.default.min.css" rel="stylesheet">

<link rel="shortcut icon" href="images/fav.png" type="image/x-icon">
    
<script src="dist/js/jquery.3.4.1.min.js"></script>
    
<script src="dist/js/popper.js" type="text/javascript"></script>
    
<script src="dist/js/bootstrap.js" type="text/javascript"></script>

<script src="dist/js/owl.carousel.js"></script>


<!-- Main Stylesheet -->

<link href="dist/style.css" rel="stylesheet" type="text/css" media="all">
    
<script src="dist/js/wow.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<script>
new WOW().init();
</script>

</head>

<body>

<?php include 'inc/header.php'; ?>


<div class="login-area">
    <div class="container">
        <div class="loginArea">
            <div class="row">
                <div class="col-md-6 textb">
                    <h1>Hire the Best Talents</h1>

                    <div id="log-line">
                        <img src="images/log-line.png" class="img-fluid">
                    </div>

                    <p>
                    Philips Outsourcing Recruitment Portal provides you with
                    the best-qualified candidates that'll help improve the
                    productivity of your organization's workforce.
                    </p>
                </div>

                <div class="col-md-6 logb">
                    <h1>Login</h1>
                    <p>Login with your social account</p>
                    <div id="log-icons">
                        <img src="images/facebook.png" class="img-fluid">
                        <img src="images/google.png" class="img-fluid">
                        <img src="images/linkedin-in.png" class="img-fluid">
                    </div>
                    <div id="login-line">
                        <img src="images/login-line.png" class="img-fluid">
                    </div>
                    <div id="l-o"> <span>OR</span> </div>

                    
                   <div id="form-c">
                   <form action="search-details.php" method="#">
                    <div class="mb-3">
                        Email
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email address">
                  </div>
                  <div class="mb-3">
                      Password
                    <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Password">
                    <div id="forg-t">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        Keep me logged in
                        </label>
                    </div>
                    <a href="forgot-password.php" id="fop"> Forgot password?</a>
                    </div>
                  </div>
                  <button type="submit" class="btn" id="l-button">Login</button>
                </form>
                  <p id="log_sing">Don't have an account?<a href="sign-up.php"> <b style= "color: #1f67b2";> Sign up</b></a></p>
                </div>
                   </div>
                    


                </div>
            </div>
        </div>
    </div>
</div>




<?php include 'inc/footer2.php'; ?>


    
</body>

</html>