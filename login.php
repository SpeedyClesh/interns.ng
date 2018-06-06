<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
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
            <li id="ul-li"><a id="si" href="sign.php">SIGN UP</a></li>
          </ul>
        </div>
      </div>
    </nav>
  <!-- nav bar end-->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-4 col-md-offset-4" style="margin-top:150px">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3>STUDENT LOGIN</h3>
                    </div>
                    <div class="panel-body">
                            <form action="" method="post" action="login.php">
                                <?php include('errors.php'); ?>
                                <div class="form-group">
                                    <label>USERNAME:</label>
                                    <input type="text" name="username" class="form-control">
                                </div>
                                <div class="form-group">              
                                    <label>PASSWORD:</label>
                                    <input class="form-control" type="password" name="password">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-info" type="submit" name="login_user" value="LOGIN" id="button">
                                </div>
                                </div>
                                <div class="form-group">
                                    <a href="#"><label>Forget Password?</label></a>
                                    <a href="sign.php"><label>SIGN UP</label></a>
                                </div>
                            </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>