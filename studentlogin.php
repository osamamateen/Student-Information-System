<?php 
	session_start();
	if(isset($_SESSION['sid'])){
		header('location:student/studentdash.php');
	}
 ?>
<title>Student Login</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
	body{
		background-image: url("images/studentlogin.jpg");
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

	<form class="box" action="studentlogin.php" method="post">
			<h1>Student Login</h1>
			<input type="text" name="roll_no" placeholder="Registration No." required>
			<input type="password" name="pass" placeholder="Password" required><br>
			<div>
				<input type="submit" name="submit" value="Login">
				<input type="reset">
			</div>

			<a href="forgotpass.php" id="forgot">Forgot Password?</a>
	</form>

</body>
</html>

<?php
	include('dbcon.php');

if (isset($_POST['submit'])) {
	
	$roll_no = $_POST['roll_no'];
	$password = $_POST['pass'];


	$qry = "SELECT * FROM `student2` WHERE roll_no = '$roll_no' AND password = '$password'";
		 
	$result = mysqli_query($con,$qry);
	$row = mysqli_num_rows($result);

	if(!$row || $row == 0){

		echo "ID or password incorrect";
	
	}

	else{

		while ($data = $result->fetch_assoc()) {
		
		$id = $data['id'];

		echo "id".$id;

		session_start();
		
		$_SESSION['sid'] = $id;
		header('location:student/studentdash.php');
		
		}

	}

}

 ?>