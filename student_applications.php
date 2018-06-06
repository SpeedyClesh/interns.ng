<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
    <body>
        <!-- Form -->
        <div class="jumbotron" style="width:70%; margin:0 auto;">
            <h2 class="text-primary text-center" style=" padding: 20px;"><span><a class="btn btn-warning" href="employer_profile.php" type="button" style="position: relative; right:35%;">Go Back</a></span> APPLICATIONS </h2>
            <div class="well well-lg bg-info">
                <p ><strong> Applications Recieved </strong></p>
            </div>
            <div class="container">

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
  <h2>Modal Login Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-default btn-lg" id="myBtn">Login</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
            <button type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
    </div>
  </div> 
</div>
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>
        </div>
        
    <script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
    </body>
</html>