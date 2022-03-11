<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    
<title>Notification | Phillips Outsourcing Employer's Portal</title>
    
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

<style>
    td, th {
  text-align: center;
}
</style>

</head>

<body>

<?php include 'inc/header2.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="search-banner">
                    <h1 style= "color: white; font-size: 30px; font-weight: 600; margin-top: 56px; margin-bottom: 56px">Notification</h1>
                <div class="filter">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-4">
                                         <a href="available-candidate.php"><img src="images/hline.png" class="img-fluid"> Available Candidates</a>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="images/lineh.png" class="img-fluid"><a href="candidate-pools.php"> View Candidates Pool</a>
                                    </div>
                                    <div class="col-md-4">
                                         <img src="images/lineh.png" class="img-fluid">
                                         <a href="#" class="modal-btn" data-toggle="modal" data-target="#exampleModal"> 
                                                Filter Candidates
                                                </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="cand-pool">
        <div id="pool-left">
            <div class="container">
                <h3>Notification</h3>
                Show <select class="form-select" >
                        <option selected>05</option>
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="3">04</option>
                        <option value="3">05</option>
                    </select> entries
            </div>
        </div>

        <div id="pool-right">
            <div id="iconlist">
            <img src="images/24.png" alt="job-logo" class="img-fluid">
            <img src="images/25.png" alt="job-logo" class="img-fluid">
            <img src="images/26.png" alt="job-logo" class="img-fluid">
            <img src="images/27.png" alt="job-logo" class="img-fluid">
            </div>
            <form action="search" method="post">
                <div class="form">
                    <input type="text" placeholder="Search" name="search" class="formfield-head">
                    <button class="btn-head"><i class="fa fa-search"></i></button>                      
                </div>
            </form>
        </div>
    </div>
</div>


<div class="not-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col" style="background-color:#2278BC; color:#fff;" >ID</th>
                    <th scope="col" style="background-color:#2278BC; color:#fff;">Message</th>
                    <th scope="col" style="background-color:#2278BC; color:#fff;">From</th>
                    <th scope="col" style="background-color:#2278BC; color:#fff;">Status</th>
                    <th scope="col" style="background-color:#2278BC; color:#fff;">Date</th>
                    <th scope="col" style="background-color:#2278BC; color:#fff;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row" style="background-color:#fff;">1</th>
                    <td>Welcome onboard</td>
                    <td>Admin</td>
                    <td>Read</td>
                    <td>Jan 31st, 2022</td>
                    <td><i class="fas fa-trash"></i></td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td style="background-color:#F6F6F6;">Update Profile</td>
                    <td style="background-color:#F6F6F6;">Admin</td>
                    <td style="background-color:#F6F6F6;">Unread</td>
                    <td style="background-color:#F6F6F6;">Jan 29th, 2022</td>
                    <td style="background-color:#F6F6F6;"><i class="fas fa-trash"></i></td>
                    </tr>
                    <tr>
                    <th scope="row" style="background-color:#fff;">3</th>
                    <td>Job Alert</td>
                    <td>Admin</td>
                    <td>Read</td>
                    <td>Jan 25th, 2022</td>
                    <td><i class="fas fa-trash"></i></td>
                    </tr>
                    <tr>
                    <th scope="row">4</th>
                    <td style="background-color:#F6F6F6;">Seminar</td>
                    <td style="background-color:#F6F6F6;">Admin</td>
                    <td style="background-color:#F6F6F6;">Unread</td>
                    <td style="background-color:#F6F6F6;">Jan 20th, 2022</td>
                    <td style="background-color:#F6F6F6;"><i class="fas fa-trash"></i></td>
                    </tr>
                    <tr>
                    <th scope="row" style="background-color:#fff;">5</th>
                    <td>Upload Documents</td>
                    <td>Admin</td>
                    <td>Read</td>
                    <td>Jan 18th, 2022</td>
                    <td><i class="fas fa-trash"></i></td>
                    </tr>
                    
                    
                </tbody>
                </table>
                    </div>
            </div>
        </div>
    </div>
</div>




<?php include 'inc/footer.php'; ?>

<!-- Modal -->
<div class="modal fade bd-example-modal-xl" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body">
        <div id="sform-field">
                <div class="container">
                    <form action="index.php">
                        <div class="row">
                            <div class="col-md-4">
                            <p>Highest Qualification</p>
                                <div class="postion">
                                    <select class="form-select" >
                                        <option selected>Select</option>
                                        <option value="1">HR</option>
                                        <option value="2">Admin</option>
                                        <option value="3">Accountant</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                            <p>Years of Experience</p>
                                <div class="postion">
                                    <select class="form-select" >
                                        <option selected>Select</option>
                                        <option value="1">HR</option>
                                        <option value="2">Admin</option>
                                        <option value="3">Accountant</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                            <p>Gender</p>
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

                        <div class="row">
                            <div class="col-md-4">
                            <p>Language</p>
                                <div class="postion">
                                    <select class="form-select" >
                                        <option selected>Select</option>
                                        <option value="1">HR</option>
                                        <option value="2">Admin</option>
                                        <option value="3">Accountant</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                            <p>Preferred Location</p>
                                <div class="postion">
                                    <select class="form-select" >
                                        <option selected>Select</option>
                                        <option value="1">HR</option>
                                        <option value="2">Admin</option>
                                        <option value="3">Accountant</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                            <p>Preferred Job Functions</p>
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

                        <div class="row">
                            <div class="col-md-4">
                            <p>Age</p>
                                <div class="postion">
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
                                <div class="createPassword">
                                    <input type="password" placeholder="To">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                            <div class="createPassword">
                                    <input type="password" placeholder="Keyword Search">
                                </div>
                            </div>
                        </div>
                        
                        <div id="filter-cand">
                            <div id="filtera">
                                <p>Candidates filtered by: <b>Akin Logistics</b></p>
                                <p>Number of Candidates: <b>10</b></p>
                            </div>
                            <div id="filterb">
                                <button id="filter-reset">Reset</button>
                                <button id="filter-apply">Apply</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
      </div>
    </div>
  </div>
</div>

    
</body>

</html>