<!-- <?php include('server.php') ?> -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<title></title>
</head>
<body>
	 <div class="container">
	<div class="jumbotron" style="width:90%; margin:0 auto;">
            <h2 class="text-primary text-center" style=" padding: 20px;"><span><a class="btn btn-warning" href="index.php" type="button" style="position: relative; right:35%;">Go Back</a></span> SEARCH RESULTS </h2>
            <!-- <div class="well well-lg bg-info">
                <p ><strong> Applications Recieved </strong></p>
            </div> -->
<br>
<hr>
<?php 

	if (isset($_REQUEST['search_item'])) {
		
			$search = $_GET['search'];
			$terms = explode(" ", $search);
			$query = "SELECT * FROM companies WHERE";

			$i = 0;
			$each;

			foreach($terms as $each) {
				$i++;

				if ($i == 1) {
					$query .= "name LIKE '%$each%'";
				} else {
					$query .= "OR name LIKE '%$each%'";
				}
			}

			mysql_connect("localhost" ,"root" ,"");
			mysql_select_db("intersng");

		$query = mysql_query($query);
		$numb = mysql_num_rows($query);

		if ($numb > 0 && $search!="") {
			
			while ($row = mysql_fetch_assoc($query)) {
				$id = $row['id'];
				$comp_name = $row['comp_name'];
				$orgname = $row['orgname'];
				$location = $row['location'];
				$address = $row['address'];
				$category = $row['category'];
				$describtion = $row['describtion'];

				echo "$comp_name";
			}

		}

	} else{

			echo "Please Enter a Word to Search!";

	}

 ?>
 </div>
</div>
</body>
</html>