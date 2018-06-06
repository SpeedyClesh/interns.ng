<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Interns.Ng</title>
</head>
<body>
    <!-- nav bar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="index.php"><img src="images/in.png" style="width: 150px; height: 60px;""></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul id="nav-ul" class="nav navbar-nav navbar-right">
             <li id="ul-li"><a id="si" href="student_applications.php">APPLICATIONS</a></li>
            <li id="ul-li"><a id="si" href="student_profile_page.php">PROFILE</a></li>
            <li id="ul-li"><a id="si" href="index.php?logout='1'">Log Out</a></li>
          </ul>
        </div>
      </div>
    </nav>
  <!-- nav bar end-->
  <div class="alert alert-success" style="margin-top: 60px">
    <?php  if (isset($_SESSION['username'])) : ?>
    <p><strong>Hello!</strong> <strong><?php echo $_SESSION['username']; ?></strong>
      <?php endif ?>
      <!-- logged in user information -->
      <p>Welcome to interns.ng</p>
  </p>
  </div>
  <div class="row">
    <div class="col-sm-8">
      <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>
    </div>
  </div>
      <div class=" text-center">
          <div id="stuhead" class="">
            <h2>The Easiest Way To Get Your Internship Placements</h2> 
            <form class="form-inline">
              <input type="email" class="form-control" size="50" placeholder="Company Name/Skill">
              <input type="email" class="form-control" size="50" placeholder="Choose State/City">
              <button type="button" class="btn btn-primary">Search</button>
            </form>
          </div>
        </div>
  <!-- latest openings-->
        <div class="container bg-info" id="content">
          <div class="col-sm-12">
             <h2 class="text-primary text-center"> New Openings </h2>
              <div style=" padding: 20px; color:#00001a"; class="col-md-8" >
              <h4><strong>Employer Name: nHub Nigera </strong></h4>
                <h4><strong>Category: Computing </strong></h4>
                <p><strong>Description: Learn web developement, android development, Web analytics, IoT, web secutity, digital marketing.</strong></p>
                <p><strong>Start Date: 2018-03-05 </strong></p>
                <p><strong>End Date: 2018-03-05 </strong></p>
                <a role="button" href="apply.php" class="btn btn-block btn-primary">Apply</a>
                <hr>
              </div>
              <div style=" padding: 20px; color:#00001a"; class="col-md-4" >
                <img src="images/Untitled-1.png" width="300px" height="200px" >
              </div>
          </div>
         </div><br>
        <!-- latest openings end-->
         <!-- Popular Categories-->
         <h2 class="text-primary text-center"> Browse Categories </h2>
        <div id="cats" class="container-fluid text-center">
          <div id="row1" class="row slideanim">
            <div id="item" class="col-sm-3">
              <span><a href="#"><img src="images/tele.png" alt="#"></a></span>
              <p>Communication</p>
            </div>
           <div id="item" class="col-sm-3">
              <span><a href="#"><img src="images/home.png" alt="#"></a></span>
              <p>Construction</p>
            </div>
            <div id="item" class="col-sm-3">
              <span><a href="#"><img src="images/tools.png" alt="#"></a></span>
              <p>Engineering</p>
            </div>
            <div class="col-sm-3">
              <span><a href="#"><img src="images/agric.png" alt="#"></a></span>
              <p>Agriculture</p>
            </div>
          </div>
          <div id="row1" class="row slideanim">
           <div id="item" class="col-sm-3">
              <span><a href="#"><img src="images/clock.png" alt="#"></a></span>
              <p>Banking/Finance</p>
            </div>
           <div id="item" class="col-sm-3">
              <span><a href="#"><a href="#"><img src="images/music.png" alt="#"></a></a></span>
              <p>Art/Multi-media</p>
            </div>
            <div id="item" class="col-sm-3">
              <span><a href="#"><img src="images/ad.png" alt="#"></a></span>
              <p>Health</p>
            </div>
            <div class="col-sm-3">
              <span><a href="#"><img src="images/science.png" alt="#"></a></span>
              <p>Science</p>
            </div>
          </div id="cat-btn">
          <div><button  class="btn btn-primary btn-large">More Categories</button></div>
        </div>
      <!-- Popular Categories end-->







   <!-- footer-->
        <footer id="footer" class="container-fluid text-center">
          <div class="grid">
              <div id="fdiv" class="col-md-6">
              <p><em>2018 </em><strong><a href="index.html">interns.ng </a></strong>All rights reserved </p>
            </div>
            <div id="fdiv" class="col-md-6">
              <span id="pfooter" class="text-left">POWERED BY: EDU-SMART SYSTEMS</span><br>
            </div>
          </div>
        </footer>
      <!-- footer end-->