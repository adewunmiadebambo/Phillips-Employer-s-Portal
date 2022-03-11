<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    
<title>Candidate Details | Phillips Outsourcing Employer's Portal</title>
    
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
table {
  border-collapse: collapse;
  width: 100%;
}

td, th {
 
  text-align: left;
  padding-left: 30px;
  padding-top: 20px;
  height: 50px;
}

tr:nth-child(odd) {
  background-color: #F5F5F5;
}
</style>

</head>

<body>

<?php include 'inc/header2.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="search-banner">
                    <h1 style= "color: white; font-size: 30px; font-weight: 600; margin-top: 56px; margin-bottom: 56px"> Candidates Details</h1>
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

<div class="search-details">
    <div class="container d-flex justify-content-between">
        <h1 style= "font-size: 30px; font-weight: 600; margin-top: 56px; margin-bottom: 56px">Candidates Details</h1>
        
    </div>
</div>

<div class="search-box">
    <div class="container">
        <div class="row">

            <div class="col-md-5"><img src="images/cand-pic.png" alt="job-logo" class="img-fluid">
            </div>

            <div class="col-md-7">
                    <table>
                        <tr>
                            <td><b>Fullname</b></td>
                        </tr>
                        <tr>
                            <td>Alexandar Christopher</td>
                        </tr>
                        <tr>
                            <td><b>Email address</b></td>
                        </tr>
                        <tr>
                            <td>alexandar_christopher@gmail.com</td>
                        </tr>
                        <tr>
                            <td><b>Phone Number</b></td>
                        </tr>
                        <tr>
                            <td>08098765432</td>
                        </tr>
                        <tr>
                            <td><b>Position</b></td>
                        </tr>
                        <tr>
                            <td>UI/UX Designer</td>
                        </tr>
                        <tr>
                            <td><b>Qualification</b></td>
                        </tr>
                        <tr>
                            <td>Bsc + Masters</td>
                        </tr>
                        <tr>
                            <td><b>Date Applied</b></td>
                        </tr>
                        <tr>
                            <td>31st Jan 2022</td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                    </table>
                    <div class="cadidatesButtons">
                        <button class="hire"><b>Hire Christopher</b></button>
                        <button class="dcv"><b>Download CV</b></button>
                        <button class="move"><b>Move to Pool</b></button>
                    </div>
            </div>
        </div>
    </div>
</div>




<?php include 'inc/footer.php'; ?>

<script src="required.js"></script>

<script>
    $(document).ready(function() {
        $('.table').DataTable();
    } );
</script>


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