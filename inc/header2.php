<script>
    $(function (){
        
        $('#heading').click(function(){
            $('#heading_nav').toggle(100);
        })

    })

</script>



<nav class="navbar navbar-expand-md sticky-top navbar-light" id="navbar">
<div class="container">
 <a class="navbar-brand" href="./"><img src="images/logo.png" class="img-fluid"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link" href="post-a-job.php">Post a Job</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="manage-jobs.php">Manage Jobs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="my-plan.php">My Plan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="help-center.php">Help Center</a>
        <div id="heading_nav">
          <ul>
            <li id="heading_head">
              <a href="#"><img src="images/head21.png" class="img-fluid"> <b>Akin Logistics</b></a>
            </li>
            <li>
              <a href="#">Notification</a>
            </li>
            <li>
              <a href="#">Account Settings</a>
            </li>
            <li>
            <img src="images/logline.png" class="img-fluid">
            </li>
            <li>
              <a href="index.php">Logout &nbsp;&nbsp;<img src="images/logout.png" class="img-fluid"></a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="notification.php"><img src="images/head2.png" class="img-fluid"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="heading" href="#"><img src="images/head21.png" class="img-fluid"></a>
     
      </li>
    </ul>
    
  </div>
</div>

</nav>

<div id="heading_nav">
  <ul>
    <li id="heading_head">
      <a href="#"><img src="images/head21.png" class="img-fluid"> <b>Akin Logistics</b></a>
    </li>
    <li>
      <a href="#">Notification</a>
    </li>
    <li>
      <a href="#">Account Settings</a>
    </li>
    <li>
    <img src="images/logline.png" class="img-fluid">
    </li>
    <li>
      <a href="index.php">Logout &nbsp;&nbsp;<img src="images/logout.png" class="img-fluid"></a>
    </li>
  </ul>
</div>