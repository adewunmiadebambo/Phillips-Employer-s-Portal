<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    
<title>Sign Up | Phillips Outsourcing Employer's Portal</title>
    
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

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="plan-banner">
                    <h1 style= "font-size: 30px; font-weight: 600; margin-top: 56px;">Sign Up</h1>
                    <p style= "margin-bottom: 56px">Reach top talent and find the right candidates today</p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="plan-header">
        <h3>Company Representative</h3>
        <p>This is information pertaining to you as a representative of the company</p>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="sform-field">
                <div class="container">
                    <form action="plan.php">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="firstName">
                                    <input type="text" placeholder="First Name">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="lastName">
                                    <input type="text" placeholder="Last Name">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="workEmail">
                                    <input type="email" placeholder="Work Email">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="createPassword">
                                    <input type="password" placeholder="Create Password">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                 <p>Position in Company</p>
                                <div class="postion">
                                    <select class="form-select" >
                                        <option selected>Select</option>
                                        <option value="1">HR</option>
                                        <option value="2">Admin</option>
                                        <option value="3">Accountant</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="clear"></div>
                        <div id="s-line"><img src="images/s-line.png" class="img-fluid"></div>
                        <div class="row">
                            <div class="col-md-6">
                            <p>Country Code</p>
                            <div class="country">
                                    <select class="form-select" >
                                        <option selected>Select</option>
                                        <option value="1">Ukraine</option>
                                        <option value="2">Russia</option>
                                        <option value="3">Bangladesh</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <p>Phone Number</p>
                                <div class="number">
                                    <input type="phone" placeholder="">
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="plan-header">
        <h3>Company's Information</h3>
        <p>This is information pertaining to your company</p>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="sform-field">
                <div class="container">
                    <form action="plan.php">
                        <div class="row">
                            <div class="col-md-6">
                                <p>Company Name</p>
                                <div class="companyName">
                                    <input type="text" placeholder="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <p>Industry</p>
                            <div class="industry">
                                    <select class="form-select" >
                                        <option selected>Select</option>
                                        <option value="1">HR</option>
                                        <option value="2">Admin</option>
                                        <option value="3">Accountant</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <p>Number of Employee(s)</p>
                                <div class="employer">
                                    <select class="form-select" >
                                        <option selected>Select</option>
                                        <option value="1">HR</option>
                                        <option value="2">Admin</option>
                                        <option value="3">Accountant</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <p>Type of Employer</p>
                                <div class="employerType">
                                    <select class="form-select" >
                                        <option selected>Select</option>
                                        <option value="1">HR</option>
                                        <option value="2">Admin</option>
                                        <option value="3">Accountant</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <p>Website</p>
                                <div class="website">
                                    <input type="text" placeholder="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <p>Where did you hear about us?</p>
                                <div class="where">
                                    <select class="form-select" >
                                        <option selected>Select</option>
                                        <option value="1">HR</option>
                                        <option value="2">Admin</option>
                                        <option value="3">Accountant</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="contactPerson">
                                    <input type="text" placeholder="Contact Person">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="notEmail">
                                    <input type="text" placeholder="Notification Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p>Country Code</p>
                                <div class="countryCode">
                                    <select class="form-select" >
                                        <option selected>Select</option>
                                        <option value="1">HR</option>
                                        <option value="2">Admin</option>
                                        <option value="3">Accountant</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <p>&nbsp;</p>
                                <div class="number2">
                                    <input type="phone" placeholder="Phone Number">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <p>Country</p>
                                <div class="country2">
                                    <select class="form-select" >
                                        <option selected>Select</option>
                                        <option value="1">HR</option>
                                        <option value="2">Admin</option>
                                        <option value="3">Accountant</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-md-12">
                                <div class="address">
                                    <textarea name="" id="" cols="30" rows="10" placeholder="Address"></textarea>
                                </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="agreement">
        <div id="agreementA">
        <p>By clicking "Sign Up", you agree to our <span>TERMS & CONDITIONS</span> and <span>PRIVACY POLICY</span> </p>
        </div>
        <form action="plan.php">
        <div id="agreementB">
            <button>Sign Up</button>
        </div>
        </form>
    </div>
</div>


<?php include 'inc/footer.php'; ?>

    
</body>

</html>