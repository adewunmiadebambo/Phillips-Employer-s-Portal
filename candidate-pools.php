<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    
<title>Candidates Pools | Phillips Outsourcing Employer's Portal</title>
    
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

<div class="container">
    <div class="cand-pool">
        <div id="pool-left">
            <div class="container">
                <h3>Candidates List</h3>
                Show <select class="form-select" >
                        <option selected>08</option>
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="3">04</option>
                        <option value="3">05</option>
                        <option value="3">06</option>
                        <option value="3">07</option>
                        <option value="3">08</option>
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

<div class="container">
<div class="search-box">
    <div class="container">
        <div class="row">        


<div class="table-responsive">
      <!--Table-->
      <table class="table table-hover mb-0 ">

        <!--Table head-->
        <thead>
          <tr>
            <th>
              <input class="form-check-input" type="checkbox" id="checkbox">
              <label class="form-check-label" for="checkbox" class="mr-2 label-table"></label>
            </th>
            <th class="th-lg">
              <a>ID
              </a>
            </th>
            <th class="th-lg">
              <a>Image
              </a>
            </th>
            <th class="th-lg">
              <a>Fullname
              </a>
            </th>
            <th class="th-lg">
              <a>Position
              </a>
            </th>
            <th class="th-lg">
              <a>Qualification
              </a>
            </th>
            <th class="th-lg">
              <a>Date Applied
              </a>
            </th>
            <th class="th-lg">
              <a>Action
              </a>
            </th>
          </tr>
        </thead>
        <!--Table head-->

        <!--Table body-->
        <tbody>
          <tr>
            <th scope="row">
              <input class="form-check-input" type="checkbox" id="checkbox1">
              <label class="form-check-label" for="checkbox1" class="label-table"></label>
            </th>
            <td>1</td>
            <td><img src="images/ppp.png" alt="job-logo" class="img-fluid"></td>
            <td>Alexandar Christopher <br>
            A.christopher@gmail.com</td>
            <td>UI/UX Designer</td>
            <td>Bsc + Masters</td>
            <td>21st Jan 2022</td>
            <td><img src="images/Icon awesome-eye.png" alt="job-logo" class="img-fluid"> &nbsp;&nbsp;<img src="images/Icon awesome-download.png" alt="job-logo" class="img-fluid"></td>
          </tr>
          <tr>
            <th scope="row">
              <input class="form-check-input" type="checkbox" id="checkbox2">
              <label class="form-check-label" for="checkbox2" class="label-table"></label>
            </th>
            <td>2</td>
            <td><img src="images/angelina-pool.png" alt="job-logo" class="img-fluid"></td>
            <td>Angelina Obi <br>
            angelina.obi@gmail.com</td>
            <td>Chartered Accountant</td>
            <td>Masters</td>
            <td>18th Jan 2022</td>
            <td><img src="images/Icon awesome-eye.png" alt="job-logo" class="img-fluid"> &nbsp;&nbsp;<img src="images/Icon awesome-download.png" alt="job-logo" class="img-fluid"></td>
          </tr>
          <tr>
            <th scope="row">
              <input class="form-check-input" type="checkbox" id="checkbox3">
              <label class="form-check-label" for="checkbox3" class="label-table"></label>
            </th>
            <td>3</td>
            <td><img src="images/jibo-pool.png" alt="job-logo" class="img-fluid"></td>
            <td>Jibola Oni <br>
            jibola.oni@yahoo.com</td>
            <td>HR Manager</td>
            <td>Bsc</td>
            <td>15th Jan 2022</td>
            <td><img src="images/Icon awesome-eye.png" alt="job-logo" class="img-fluid"> &nbsp;&nbsp;<img src="images/Icon awesome-download.png" alt="job-logo" class="img-fluid"></td>
          </tr>
          <tr>
            <th scope="row">
              <input class="form-check-input" type="checkbox" id="checkbox4">
              <label class="form-check-label" for="checkbox4" class="label-table"></label>
            </th>
            <td>4</td>
            <td><img src="images/eduardo-pool.png" alt="job-logo" class="img-fluid"></td>
            <td>Eduardo Paul <br>
            e.paul@gmail.com</td>
            <td>C++ Developer</td>
            <td>Masters</td>
            <td>14th Jan 2022</td>
            <td><img src="images/Icon awesome-eye.png" alt="job-logo" class="img-fluid"> &nbsp;&nbsp;<img src="images/Icon awesome-download.png" alt="job-logo" class="img-fluid"></td>
          </tr>
          <tr>
            <th scope="row">
              <input class="form-check-input" type="checkbox" id="checkbox5">
              <label class="form-check-label" for="checkbox5" class="label-table"></label>
            </th>
            <td>5</td>
            <td><img src="images/esther-pool.png" alt="job-logo" class="img-fluid"></td>
            <td>Esther Lewis  <br>
            esther_lewis@yahoo.com</td>
            <td>Software Developer</td>
            <td>Bsc + Masters</td>
            <td>12th Jan 2022</td>
            <td><img src="images/Icon awesome-eye.png" alt="job-logo" class="img-fluid"> &nbsp;&nbsp;<img src="images/Icon awesome-download.png" alt="job-logo" class="img-fluid"></td>
          </tr>
          <tr>
            <th scope="row">
              <input class="form-check-input" type="checkbox" id="checkbox5">
              <label class="form-check-label" for="checkbox5" class="label-table"></label>
            </th>
            <td>6</td>
            <td><img src="images/namdi-pool.png" alt="job-logo" class="img-fluid"></td>
            <td>Nnamdi Kalu <br>
            nnamdi.kalu@gmail.com</td>
            <td>Software Tester</td>
            <td>Bsc</td>
            <td>10th Jan 2022</td>
            <td><img src="images/Icon awesome-eye.png" alt="job-logo" class="img-fluid"> &nbsp;&nbsp;<img src="images/Icon awesome-download.png" alt="job-logo" class="img-fluid"></td>
          </tr>
          <tr>
            <th scope="row">
              <input class="form-check-input" type="checkbox" id="checkbox5">
              <label class="form-check-label" for="checkbox5" class="label-table"></label>
            </th>
            <td>7</td>
            <td><img src="images/matha-pool.png" alt="job-logo" class="img-fluid"></td>
            <td>Matha Mary <br>
            matha_mary@gmail.com</td>
            <td>Creative Designer</td>
            <td>Bsc + Masters</td>
            <td>8th Jan 2022</td>
            <td><img src="images/Icon awesome-eye.png" alt="job-logo" class="img-fluid"> &nbsp;&nbsp;<img src="images/Icon awesome-download.png" alt="job-logo" class="img-fluid"></td>
          </tr>
          <tr>
            <th scope="row">
              <input class="form-check-input" type="checkbox" id="checkbox5">
              <label class="form-check-label" for="checkbox5" class="label-table"></label>
            </th>
            <td>8</td>
            <td><img src="images/stella-pool.png" alt="job-logo" class="img-fluid"></td>
            <td>Stella Nwanchukwu <br>
            s.nwanchukwu@gmail.com</td>
            <td>HR Busines Partner</td>
            <td>Bsc + Masters</td>
            <td>5th Jan 2022</td>
            <td><img src="images/Icon awesome-eye.png" alt="job-logo" class="img-fluid"> &nbsp;&nbsp;<img src="images/Icon awesome-download.png" alt="job-logo" class="img-fluid"></td>
          </tr>
        </tbody>
        <!--Table body-->
      </table>
      <!--Table-->
    </div>

  </div>

</div>
<!-- Table with panel -->
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