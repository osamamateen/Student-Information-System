<?php
ob_start();
session_start();
 ?>
<!DOCTYPE>
<html>
<head>
	<title>Student Management system</title>
  <script type="text/javascript" src="js/password.js"></script>
	<style type="text/css">
body{
	margin:0;
	padding: 0;
	color: black;
	font-family: sans-serif;
}

input[type=password],input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  width: 30%;
  margin: 100px auto;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
label{
	color: black;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: right;
  display: inline-block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #800000;
  color: #fff;
}

.topnav #s{
  display: inline-block;
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  padding: 12px 16px;
  float: left;


}

.topnav #s:hover{
  background-color: #333;
  color: #fff;
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


	<div class="wrap">


	<div class="container">
 	<form name="myForm" method="post" enctype="multipart/form-data" onsubmit="return validate()">

    <label for="fname">Enter Password <?phpecho $_REQUEST['roll_no'];?></label>
    <input type="Password" id="pass" name="password" placeholder="Your Password.." required>

    <label for="lname">Confirm Pasword</label>
    <input type="Password" id="cpass" name="cpass" placeholder="Your Password.." required>

    <label for="ques">Select security question</label>
    <select id="ques" name="ques" required>
      <option value="1">First Pet</option>
      <option value="2">Date of birth</option>
      <option value="3">----</option>
    </select>
    <label for="answer">Answer</label>
    <input type="text" name="answer" placeholder="Your answer.." required>


    <input type="submit" value="Submit" name="submit">
  </form>
</div>
</body>
</html>
</body>
</html>

<?php



	if (isset($_POST['submit'])){

		include('dbcon.php');




		$password = $_POST['password'];
		$ques = $_POST['ques'];
		$answer = $_POST['answer'];

		if (isset($_REQUEST['roll_no'])){
			echo $_REQUEST['roll_no'];
		  // $_SESSION['name']= $_REQUEST['roll_no'];
		  // $roll_no=$_SESSION['name'];

		  $roll_no  = $_REQUEST['roll_no'];


		  $qry =  "UPDATE `student2` SET `password`='$password',`ques`='$ques',`answer`='$answer' WHERE `roll_no` = '$roll_no'";


		  $run = mysqli_query($con,$qry);

		  if($run == true){
			 
			echo "<script type='text/javascript'>window.top.location='http://localhost/sms/studentlogin.php';</script>";
      

			// header('http://localhost/sms/studentlogin.php');
      die();
		}
		else{
			echo"failed";
		}}
	}

	ob_flush();
	
 ?>
