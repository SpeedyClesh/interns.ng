<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="style.css">
	</head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="100">
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
            <li id="ul-li"><a href="index.php">Home</a></li>
            <li id="ul-li"><a href="about.php">About Us</a></li>
            <li id="ul-li"><a id="si" href="signup_comp.php">JOIN AS COMPANY</a></li>
            <li id="ul-li"><a id="li" href="sign.php">JOIN AS STUDENT</a></li>
          </ul>
        </div>
      </div>
    </nav>
  <!-- nav bar end-->
  <!-- Welcome face-->
      <div id="face" class="" style="background-image: url('images/ab.png');">
        <div class=" text-center">
          <div id="categories" class="">
            <h2>The Easiest Way To Get Your Internship Placements</h2> 
            <form action="search.php" method="GET" class="form-inline">
              <input name="search" type="text" class="form-control" size="50" placeholder="Company Name/Skill">
              <!-- <input type="email" class="form-control" size="50" placeholder="Choose State/City"> -->
              <button type="submit" class="btn btn-primary" name="search_item">Search</button>
            </form>
          </div>
        </div>
      <!-- Welcome face end-->
      <!-- latest openings-->
        <div class="container-fluid bg-info" id="content">
           <h2 class="text-primary text-center"> New Openings </h2>
            <div style=" padding: 20px; color:#00001a"; class="col-md-8" >
            <h4><strong>Employer Name: nHub Nigera </strong></h4>
              <h4><strong>Category: Computing </strong></h4>
              <p><strong>Description: Learn web developement, android development, Web analytics, IoT, web secutity, digital marketing.</strong></p>
              <p><strong>Start Date: 2018-03-05 </strong></p>
              <p><strong>End Date: 2018-03-05 </strong></p>
              <a role="button" href="login.php" class="btn btn-block btn-primary">Apply</a>
              <hr>
            </div>
            <div style=" padding: 20px; color:#00001a"; class="col-md-4" >
              <img src="images/in.png" width="400px" height="150px" >
            </div>

         </div>
      <!-- latest openings-->
      <!-- Popular Categories-->
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
          <div><button  class="btn btn-primary btn-large">Other(s) Categories</button></div>
        </div>
      <!-- Popular Categories end-->
      <!-- Contact Section -->
        <div id="contact" class="container-fluid" style="background-image: url('images/ab.png'); color:white">
          <h2 class="text-center text-primary" style="color:white">CONTACT US</h2>
          <div style=" padding: 20px;" class="row">
            <div class="col-sm-5">
              <p>Contact us and we'll get back to you within 24 hours.</p>
              <p><span ></span> Jos, Nigeria</p>
              <p><span ><img src="images/tele.png" width="30px" height="30px" alt="phone"></span> +234 8167299239, +234 8137725705</p>
              <a style="color:white"><p><span ><img src="images/mail.png" width="30px" height="30px" alt=" internsng@sharklasers.com"></span>  hello@internsng.com</p></a>
              <a style="color:white"><p><span ><img src="images/fb.jpg" width="30px" height="30px" alt="facebook.com/internsng"></span> facebook.com/internsng</p></a>
               <a style="color:white"><p><span ><img src="images/twit.png" width="30px" height="30px" alt="twitter.com/internsng"></span> twitter.com/internsng</p></a> 
            </div>
            <div style=" padding: 20px;" class="col-sm-7 slideanim">
              <div class="row">
                <div class="col-sm-6 form-group">
                  <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                  <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                </div>
              </div>
              <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
              <div class="row">
                <div class="col-sm-12 form-group">
                  <button class="btn btn-primary pull-right" style="width: 200px;" type="submit">Send</button>
                </div>
              </div>  
            </div>
          </div>
        </div>
      <!-- Contact Section end-->
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








