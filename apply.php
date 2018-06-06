<?php include('server.php') ?>
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
           <a class="navbar-brand" href="index.php" style="padding-top: 20px;"><p><strong>Logged In As Timothy</strong> </p></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul id="nav-ul" class="nav navbar-nav navbar-right">
            <li id="ul-li"><a id="si" href="logout.php">Log Out</a></li>
          </ul>
        </div>
      </div>
    </nav>
  <!-- nav bar end-->
  <div class="jumbotron" style="width:70%; margin:0 auto;">
  <h2 class="text-primary text-center" style=" padding: 20px;"><span><a class="btn btn-warning" href="student_profile.php" type="button" style="position: relative; right:300px;">Go Back</a></span> New Application </h2>
  <div class="well well-lg bg-info">
  <p><strong>Employer: </strong>nHub Nigeria</p>
    <h4><strong>Category: </strong> computing</h4>
    <h4><strong>Description: </strong>Learn web developement, android development, Web analytics, IoT, web secutity, digital marketing.</h4>
</div>
             <form class="form-horizontal" action="apply.php" method="post">
                 <?php include('errors.php'); ?>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Name:</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Full Name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Gender:</label>
                    <div class="col-sm-8">
                        <select name="gender">
                            <option value="Select Gender"> Select Gender </option>
                            <option value="Male"> Male </option>
                            <option value="Female"> Female </option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Address: </label>
                    <div class="col-sm-8">
                        <input type="text" name="address" class="form-control" id="inputEmail3" placeholder="Old Air-Port">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Phone Number:</label>
                    <div class="col-sm-8">
                        <input type="text" name="phonenumb" class="form-control" id="inputEmail3" value="" placeholder="+2348123456789">
                    </div>
                </div>
                <div class="form-group">
                        <label class="col-sm-2 control-label"> Email:</label>
                        <div class="col-sm-8">
                            <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="example@gmail.com">
                        </div>
                    </div>
                <div class="well well-lg bg-info">
                    <p><strong>Educational Information</strong></p>
                </div>
                <div class="form-group">
                        <label class="col-sm-2 control-label"> Institution Name:</label>
                        <div class="col-sm-8">
                            <input type="text" name="school" class="form-control" id="inputEmail3" placeholder="University of Jos">
                        </div>
                    </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"> Duration of Study:</label>
                    <div class="col-sm-8">
                        <input type="text" name="duration" class="form-control" id="inputEmail3" placeholder="2015-2018">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"> Department:</label>
                    <div class="col-sm-8">
                        <input type="text" name="depertment" class="form-control" id="inputEmail3" placeholder="Natural Science">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"> Course of Study:</label>
                    <div class="col-sm-8">
                        <input type="text" name="course" class="form-control" id="inputEmail3" placeholder="Computer Science">
                    </div>
                </div>
                <button class="btn btn-primary btn-lg" name="apply" style="position: relative; left:420px;">APPLY</button>
            </form>

</div>
 