<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

<link href="https://fonts.googleapis.com/css?family=Kanit|Raleway&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="index.css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">


</head>
<body>
<header>
	<nav class="navbar navbar-light bg-transperent">
  	<span class="navbar-brand mb-0 h1">
  		<h3>Logo</h3>
  	</span>
</nav>
</header>
<div class="container">

	<div class="row">
		<div class="col col-md-6" id="one">
			<label><h3 id="login">Log in</h3></label>
			<form method="post">
				<label><h4>user Id</h4></label >
				<input type="text" name="username" class="form-control"><br>
				<label><h4>password</h4></label>
				<input type="text" name="password" class="form-control"><br>
				<br>
				<button class="btn btn-primary" name="submit">log In</button><br><br>
				<button class="btn btn-primary"> Forget password</button><br><br>
				<h6>Login with</h6>
				<i class="fab fa-facebook-f fa-2x"></i>&nbsp
				<i class="fab fa-google fa-2x"></i>&nbsp
				<i class="fab fa-twitter fa-2x"></i>
			</form>

		</div>
		<div class="vl"></div>
		<div class="col col-md-5" id="two">
			<label><h3 id="login">Register</h3></label>
			<form method="post">
				<label><h4>Enter User Id</h4></label >
				<input type="text" name="username" class="form-control"><br>
				<label><h4>Enter your Email</h4></label >
				<input type="text" name="fullName" class="form-control"><br>
			
				<label><h4>Enter your Password</h4></label >
				<input type="text" name="password" class="form-control"><br>
				<label><h4>Enter your city</h4></label>
				<input type="text" name="city" class="form-control">
				
				<br>
				<button class="btn btn-primary" name="Register"> sign up</button>

			</form>
		</div>
		
	</div>
	
</div>




<?php

if (isset($_POST['submit'])) {

	$a = $_POST['username'];
	$b=  $_POST['password'];
		$conn = mysqli_connect('localhost','root','','project1_admin');
		$sql = "SELECT * FROM `admin` WHERE `userId`='$a' AND `password`='$b'";
		$run = mysqli_query($conn, $sql);
		$row = mysqli_num_rows($run);
		
		if ($row < 1) {
			?>
			<script type="text/javascript">
				alert("username and password does not match");
			</script>
			<?php
			}
			else {
				header("location:next.php");
			}
		}

if (isset($_POST["Register"])) {

		$username = $_POST['username'];
		$password = $_POST['password'];
		$fullname =$_POST['fullName'];
		$city = $_POST['city'];

		$conn = mysqli_connect('localhost','root','','project1_admin');
		$sql = "INSERT INTO `admin`(`id`, `userId`, `password`, `fullName`, `city`) VALUES (Null,'$username','$password','$fullname','$city')";

		$run = mysqli_query($conn,$sql);
		if ($run) {
			echo "successfully created user";
		}
	}

?>

</body>
</html>