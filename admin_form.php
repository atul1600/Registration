<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
</head>
<body>
	<form method="post" class="form-control">
		<label>user id</label>
		<input type="text" name="username">
		<br><br>
		<label> password</label>
		<input type="text" name="password">
		<br><br>
		<label>full name</label>
		<input type="text" name="fullName">
		<br><br>
		<label>city</label>
		<input type="text" name="city">
		<br><br>

		<input type="submit" name="submit" value="submit">

	</form>

	<?php
	if (isset($_POST["submit"])) {

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
	<br><br>


</body>
</html>