<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
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
            <li id="ul-li"><a id="si" href="login_comp.php">LOGIN</a></li>
          </ul>
        </div>
      </div>
    </nav>
  <!-- nav bar end-->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-4 col-md-offset-4" style="margin-top:70px">
                <div class="panel panel-info">
                    <div class="panel-heading">
                       <h3>JOIN AS COMPANY</h3>
                    </div>
                    <div class="panel-body">
                            <form method="post" action="signup_comp.php">
                                <?php include('errors.php'); ?>
                                <div class="form-group">
                                    <label>ORGANISATION:</label>
                                    <input type="text" name="orgname" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email:</label>
                                    <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                                </div>
                                <div class="form-group">
                                    <label>COMPANY NAME:</label>
                                    <input type="text" name="comp_name" class="form-control" value="<?php echo $username; ?>">
                                </div>
                                <div class="form-group">              
                                    <label>Password:</label>
                                    <input class="form-control" type="password" name="password_1">
                                <div class="form-group">              
                                    <label>Confirm Password:</label>
                                    <input class="form-control" type="password" name="password_2">
                                <!-- <div class="radio" >
                                  <label>
                                    <input type="radio" name="category" id="usertype" value="student" checked>
                                    <label style="font-weight: bold">Student</label>
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="category" id="usertype2" value="employer">
                                    <label style="font-weight: bold">Employer</label>
                                  </label>
                                </div><br> -->
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-info" type="submit" name="reg_comp" value="JOIN NOW" id="button">
                                </div>
                                <div class="form-group">
                                    <label>Already a member?</label>
                                    <a href="login_comp.php"><label>LOGIN</label></a>
                                </div>
                            </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>