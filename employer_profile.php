<?php 
  // session_start(); 

  include('server.php');

  if (!isset($_SESSION['comp_name'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login_comp.php');
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['comp_name']);
    header("location: login_comp.php");
  }

  // display contents from db

   // $query  = "SELECT * FROM interns";

   // $records = mysqli_query($db ,$query);
   // $db = mysqli_connect('localhost', 'root', '', 'internsng');
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
            <li id="ul-li"><a id="si" href="employee_applications.php">APPLICATIONS</a></li>
            <li id="ul-li"><a id="si" href="employer_profile_page.php">PROFILE</a></li>
            <li id="ul-li"><a id="si" href="login.php">Log Out</a></li>
          </ul>
        </div>
      </div>
    </nav>
  <!-- nav bar end-->
  <div class="alert alert-success" style="margin-top: 60px">
    <?php  if (isset($_SESSION['comp_name'])) : ?>
    <p><strong>Hello!</strong> <strong><?php echo $_SESSION['comp_name']; ?></strong>
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
  <!-- student application -->
    </div>
    <div class="col-sm-12">
      <h2 class="text-center" id="emphead"><strong>Newly Registered Interns</strong></h2>
      <table class="table table-hover">
        <?php 

            $result = mysqli_query($db, "SELECT * FROM interns");
        ?>
          <thead>
            <tr>
              <th>Name</th>
              <th>Gender</th>
              <th>Address</th>
              <th>Phone number</th>
              <th>Email</th>
              <th>School</th>
              <th>Internship Duration</th>
              <th>Depertment</th>
              <th>Course of Study</th>
            </tr>
          </thead>
          <tbody>
           <tr>
          <?php

              while ($row = mysqli_fetch_array($result)) {
        
          ?>

      <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['phonenumb']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['school']; ?></td>
        <td><?php echo $row['duration']; ?></td>
        <td><?php echo $row['depertment']; ?></td>
        <td><?php echo $row['course']; ?></td>
        
      </tr>

      <?php } ?>
</table>


            <!-- <td>Sena Timothy Tersoo</td>
            <td>senatim@gmil.com</td>
            <td>Electrical and Electronics Engineering</td> -->
            <!-- <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#details">Details</button></td> -->
          <!-- </tr>
          </tbody>
          </table> -->
        <!-- Student details modal -->
  <!-- Add internship start -->
  <div class="container-fluid" id="emp_profile">
  <div class="row">
    <div class="col-sm-6">
        <div class="col-sm-12">
        <h2 class="text-center" id="emphead"><strong>Add Internship </strong></h2>
          <form role="form" action="insert_internship.php" method="post">
          <input type="hidden" name="id" value=>
          <div class="form-group">
              <label>Employer: </label>
              <input type="text" name="employer" class="form-control" value="">
            </div>
            <div class="form-group">
              <label>Category: </label>
              <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
              <label>Description: </label>
              <input type="text" name="description" class="form-control">
            </div>
            <div class="form-group">
              <label>Duration: </label>
              <input type="text" name="stipend" placeholder="" class="form-control">
            </div>
            <div class="form-group">
              <label>Start Date: </label>
              <input type="date" name="start_date" placeholder="YYYY-MM-DD" class="form-control datepicker">
            </div>
            <div class="form-group">
              <label>End Date: </label>
              <input type="date" name="end_date" placeholder="YYYY-MM-DD" class="form-control datepicker">
            </div>
            <button type="submit" name="loginBtn" class="btn btn-primary btn-block">Add Internship</button>
          </form>
        </div>
        <!-- Add internship end -->
        <!-- Internships added start -->
        <div class="col-sm-12">
        <h2 class="text-center" id="emphead"><strong>Internships posted </strong></h2><br>

      <div class="well bg-info" style="padding: 20px">

        <h4><strong>Employer: </strong></h4>
        <h4><strong>Category: </strong></h4>
        <p><strong>Description: </strong></p>
        <p><strong>Duration: </strong></p>
        <p><strong>Start Date: </strong></p>
        <p><strong>End Date: </strong></p>   

      </div>
    </div>
    <!-- Internships added end -->
    
          <div class="modal fade" id="details" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-title"> Student details</div>
                <div class="modal-body">
                  <p><strong>Name:</strong>Kingsley Godfrey</p>
                  <p><strong>Email:</strong>kingsfrey@gmail.com</p>
                  <p><strong>Institution Name:</strong>University of Jos, Nigeria.</p>
                  <p><strong>Course of Study:</strong>Computer Science</p>
                </div>
              </div>
            </div>
          </div>


    </div>
    </div>
    <!-- Student application end -->
  </div>
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