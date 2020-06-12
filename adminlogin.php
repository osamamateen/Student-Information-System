<?php 
	session_start();
	if(isset($_SESSION['uid'])){
		header('location:admin/admindash.php');
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		body{
			background-image: url("images/admin.jpg");
			overflow-y: hidden;
		}
	</style>
</head>
<body>

<div class="topnav">
  <a href="index.php" id="s">Student Management</a>
  <a href="signup2.php">Signup</a>
  <a href="adminlogin.php">Admin</a>
  <a href="studentlogin.php">Student</a>
</div>
	
<div>
	<form class="box" action="adminlogin.php" method="post">
			<h1>Admin Login</h1>
			<input type="text" name="username" placeholder="Username" required>
			<input type="password" name="pass" placeholder="Password" required><br>
			<div>
				<input type="submit" name="submit" value="Login">
				<input type="reset">
			</div>

			<a href="#" id="forgot">Forgot Password?</a>
	</form>
</div>
</body>
</html>

<?php
	include('dbcon.php');

if (isset($_POST['submit'])) {
	
	$username = $_POST['username'];
	$password = $_POST['pass'];


	$qry = "SELECT * FROM `admin` WHERE username = '$username' AND password = '$password'";
		 
	$result = mysqli_query($con,$qry);
	$row = mysqli_num_rows($result);

	if(!$row || $row == 0){

		echo "username or password incorrect";
	
	}

	else{

		while ($data = $result->fetch_assoc()) {
		
		$id = $data['id'];

		echo "id".$id;

		session_start();
		
		$_SESSION['uid'] = $id;
		header('location:admin/admindash.php');
		
		}

	}

}

 ?>