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
            <div class="containerr">
            <div class="container">

              <table class="table table-hover">
        <?php 

            $result = mysqli_query($db, "SELECT * FROM employ_applications");
        ?>
          <thead>
            <tr>
              <th>Name</th>
              <th>Gender</th>
             <!--  <th>Address</th -->>
              <!-- <th>Phone number</th> -->
              <th>Email</th>
              <!-- <th>School</th>
              <th>Internship Duration</th>
              <th>Depertment</th> -->
              <!-- <th>Course of Study</th> -->
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
        <!-- <td><?php echo $row['address']; ?></td> -->
        <!-- <td><?php echo $row['phonenumb']; ?></td> -->
        <td><?php echo $row['email']; ?></td>
        <!-- <td><?php echo $row['school']; ?></td>
        <td><?php echo $row['duration']; ?></td>
        <td><?php echo $row['depertment']; ?></td> -->
        <td><!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Details</button></td>
        
      </tr>

      <?php } ?>
</table>

  
<?php 

            $result = mysqli_query($db, "SELECT * FROM employ_applications");
        ?>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">STUDENT DETAILS</h4>
        </div>
        <div class="modal-body">
          <?php

              while ($row = mysqli_fetch_array($result)) {
        
          ?>
          <label>NAME: </label><span> <?php echo $row['name']; ?></span>
          <?php } ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
        </div>
    <script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
    </body>
</html>