<?php 
	session_start();
	
	// variable declaration
	$name="";
	$orgname="";
	$comp_name="";
	$username = "";
	$email    = "";
	$password_1="";
	$password_2="";
	// $category="";
	$name ="";
	$gender ="";
	$address ="";
	$phonenumb ="";
	$email ="";
	$school ="";
	$depertment ="";
	$duration ="";
	$course ="";
	$errors = array(); 
	$_SESSION['success'] = "";
	$update ="Your information has been updated succesfully";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'internsng');

	// REGISTER Student USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		$category = mysqli_real_escape_string($db, $_POST['category']);

		// form validation: ensure that the form is correctly filled
		if (empty($name)) { array_push($errors, "name is required"); }
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
		// if (empty($category)) { array_push($errors, "category is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (name, username, email, password) 
					  VALUES('$name', '$username', '$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
				header('location: student_profile.php');
			}

	}


	// REGISTER company USER
	if (isset($_POST['reg_comp'])) {
		// receive all input values from the form
		$orgname = mysqli_real_escape_string($db, $_POST['orgname']);
		$comp_name = mysqli_real_escape_string($db, $_POST['comp_name']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		// $category = mysqli_real_escape_string($db, $_POST['category']);

		// form validation: ensure that the form is correctly filled
		if (empty($orgname)) { array_push($errors, "organisation name is required"); }
		if (empty($comp_name)) { array_push($errors, "company name is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
		// if (empty($category)) { array_push($errors, "category is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO comp_users (orgname, comp_name, email, password) 
					  VALUES('$orgname', '$comp_name', '$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['comp_name'] = $comp_name;
			header('location: employer_profile.php');
			}
		}

	// ... 

	// LOGIN student USER
		if (isset($_POST['login_user'])) {
			$username = mysqli_real_escape_string($db, $_POST['username']);
			$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				// $_SESSION['success'] = "You are now logged in";
				header('location: student_profile.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}


			// LOGIN company USER
		if (isset($_POST['comp_user'])) {
			$comp_name = mysqli_real_escape_string($db, $_POST['comp_name']);
			$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($comp_name)) {
			array_push($errors, "company name is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM comp_users WHERE comp_name='$comp_name' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['comp_name'] = $comp_name;
				$_SESSION['success'] = "You are now logged in";
				header('location: employer_profile.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

	//...

	// new interns database
	if (isset($_POST['update'])) {
		// receive all input values from the form
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$gender = mysqli_real_escape_string($db, $_POST['gender']);
		$address = mysqli_real_escape_string($db, $_POST['address']);
		$phonenumb = mysqli_real_escape_string($db, $_POST['phonenumb']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$school = mysqli_real_escape_string($db, $_POST['school']);
		$depertment = mysqli_real_escape_string($db, $_POST['depertment']);
		$duration = mysqli_real_escape_string($db, $_POST['duration']);
		$course = mysqli_real_escape_string($db, $_POST['course']);

		// form validation: ensure that the form is correctly filled
		if (empty($name)) { array_push($errors, "name is required"); }
		if (empty($gender)) { array_push($errors, "gender is required"); }
		if (empty($address)) { array_push($errors, "address is required"); }
		if (empty($phonenumb)) { array_push($errors, "phonenumb is required"); }
		if (empty($email)) { array_push($errors, "email is required"); }
		if (empty($school)) { array_push($errors, "school is required"); }
		if (empty($depertment)) { array_push($errors, "depertment is required"); }
		if (empty($duration)) { array_push($errors, "duration is required"); }
		if (empty($course)) { array_push($errors, "course is required"); }

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "INSERT INTO interns (name, gender, email, address, phonenumb, school, depertment, duration, course) 
					  VALUES('$name', '$gender', '$email', '$address', '$phonenumb', '$school', '$depertment', '$duration', '$course')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
				header('location: student_profile_page.php');
				echo("profile updated succesfully");
		}

	}

	//... APPLY FOR INTERNSHIP

// new interns database
	if (isset($_POST['apply'])) {
		// receive all input values from the form
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$gender = mysqli_real_escape_string($db, $_POST['gender']);
		$address = mysqli_real_escape_string($db, $_POST['address']);
		$phonenumb = mysqli_real_escape_string($db, $_POST['phonenumb']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$school = mysqli_real_escape_string($db, $_POST['school']);
		$depertment = mysqli_real_escape_string($db, $_POST['depertment']);
		$duration = mysqli_real_escape_string($db, $_POST['duration']);
		$course = mysqli_real_escape_string($db, $_POST['course']);

		// form validation: ensure that the form is correctly filled
		if (empty($name)) { array_push($errors, "name is required"); }
		if (empty($gender)) { array_push($errors, "gender is required"); }
		if (empty($address)) { array_push($errors, "address is required"); }
		if (empty($phonenumb)) { array_push($errors, "phonenumb is required"); }
		if (empty($email)) { array_push($errors, "email is required"); }
		if (empty($school)) { array_push($errors, "school is required"); }
		if (empty($depertment)) { array_push($errors, "depertment is required"); }
		if (empty($duration)) { array_push($errors, "duration is required"); }
		if (empty($course)) { array_push($errors, "course is required"); }

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "INSERT INTO employ_applications (name, gender, email, address, phonenumb, school, depertment, duration, course) 
					  VALUES('$name', '$gender', '$email', '$address', '$phonenumb', '$school', '$depertment', '$duration', '$course')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
				header('location: apply.php');
		}

	}

	//display contents


?>