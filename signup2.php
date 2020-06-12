<?php 
ob_start();
 ?>
<DOCTYPE!>
<html>
<head>
<title>Student Regtion Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/signup2.css">
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
<form action="signup2.php" method="post" enctype="multipart/form-data">
	<h3 align="center" style="color: #fff; background-color: #800000; padding: 7px 200px; border-radius: 15px;">STUDENT REGISTRATION</h3>


			<label>First Name</label>
			<input type="text" name="fname" maxlength="30" placeholder="First Name" required> 

			<label>Last Name</label>
			<input type="text" name="lname" maxlength="30" placeholder="Last Name" required> 
		

 
<!----- Date Of Birth ---------------- Gender---------------------------------------->
	
			
		 <label>Date OF Birth</label>
			<input type="date" name="dob"> 
			<br>
			
			<label>Gender</label>
			Male <input type="radio" name="gender" value="Male" required> 
			Female <input type="radio" name="gender" value="Female" required> 
			<br>
					
 
<!----- Email Id -----------------------Mobile Number----------------------------------->
		
	
			<label>Email</label>
			<input type="text" name="email" maxlength="100" placeholder="Email" required> 

			<LABEL>Contact</LABEL>
			
			<input type="text" name="mobile" maxlength="11" placeholder="Mobile Number" required> 
			

 
<!----- Address -------------------------City--------------------------------->
		
	
			<!-- Address  -->
			<label>Address</label>
			<input  type="text" name="address" placeholder="Address" required>

			<!-- City -->
			<label>City</label>
			<input type="text" name="city" maxlength="30" placeholder="City"> 
		
			

			
		
<!----- Co ------------------------Zip---------------------------------->
 
 	
			<!-- Co -->
			<label>Country</label>
			<input type="text" name="country" placeholder="Counry"> 

			<!-- Zip Code -->
			<label>Zip Code</label>
			<input type="text" name="zip" maxlength="6" placeholder="Zip Code"> 
		

<!----- CNIC ---------------------------------------------------------->
		
	
			<!-- CNIC -->
			<label>CNIC No.</label>
			<input type="text" name="cnic" maxlength="13" placeholder="CNIC" required> 
			
		

<!----- Domicile ---------------------------------------------------------->
	
		
			<!-- Domicile -->
			<label>Domicile</label>
			<input type="text" name="domicile" placeholder="Domicile" required> 

		




<!----- Qualification---------------------------------------------------------->
		
			
				<!-- SSC -->
				<label>SSC</label>
				<input type="text" name="ssc_board" maxlength="30" placeholder="SSC Board" required> 
				<input type="text" name="ssc_perc" maxlength="30" placeholder="SSC Percentage" required> 
				<input type="text" name="ssc_year" maxlength="30" placeholder="SSC Year Of Passing" required> 
				
			 
			 
				<!-- HSC -->
				<label>HSC</label>
				<input type="text" name="hsc_board" maxlength="30" placeholder="HSC Board" required> 
				<input type="text" name="hsc_perc" maxlength="30" placeholder="HSC Percentage" required> 
				<input type="text" name="hsc_year" maxlength="30" placeholder="HSC Year Of Passing" required> 
				
		
 
		

<!----- Program ---------------------------------------------------------->
		
			
		
				<label>Program</label>
			
			<select name="program">
						<option value="">Program</option>
						<option value="BBA">BBA</option>
						<option value="BSCS">BSCS</option>
						<option value="ACF">ACF</option>
						<option value="AML">AML</option>
					</select>
			
			
		
	
			<!-- Roll No. -->
			<label>Registration No.</label>
			<input type="text" name="roll_no" maxlength="5" placeholder="Registration No." required>
			


<!-- ------------image---------------- -->

<label>Image</label>
<input type="file" name="image""> 

<br><br>
<!----- Submit and Reset ------------------------------------------------->
			<center><input type="submit" name = "submit" value="Submit" href="password.php"></center>
			<!-- <input type="reset" value="Reset"> -->

			
</form>

</div>
</div>
</body>
</html>

<?php 
	if (isset($_POST['submit'])){

		include('dbcon.php');


		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$dob = $_POST['dob'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$cnic = $_POST['cnic'];
		$zip = $_POST['zip'];
		$country = $_POST['country'];
		$domicile = $_POST['domicile'];
		$ssc_board = $_POST['ssc_board'];
		$ssc_perc = $_POST['ssc_perc'];
		$ssc_year = $_POST['ssc_year'];
		$hsc_board = $_POST['hsc_board'];
		$hsc_perc = $_POST['hsc_perc'];
		$hsc_year = $_POST['hsc_year'];
		$program = $_POST['program'];
		$roll_no = $_POST['roll_no'];

		$imgname = $_FILES['image']['name'];
		$tempname = $_FILES['image']['tmp_name'];


		move_uploaded_file($tempname, "dataimg/$imgname");

		$qry = "SELECT * FROM `student2` WHERE `roll_no` = '$roll_no'";
		 
		$result = mysqli_query($con,$qry);
		$row = mysqli_num_rows($result);

		if($row > 0){

			echo '<script type="text/javascript">alert("Registration No. already exists!");</script>';
		
		}

		else{

			$qry = "INSERT INTO `student2`(`id`, `fname`, `lname`, `dob`, `email`, `mobile`, `gender`, `address`, `cnic`, `zip`, `country`, `domicile`, `ssc_board`, `ssc_perc`, `ssc_year`, `hsc_board`, `hsc_perc`, `hsc_year`, `program`, `roll_no`, `image`, `password`, `ques`, `answer`)


				VALUES  ('','$fname', '$lname', '$dob', '$email', '$mobile', '$gender', '$address', '$cnic', '$zip', '$country', '$domicile', '$ssc_board', '$ssc_perc', '$ssc_year', '$hsc_board', '$hsc_perc', '$hsc_year', '$program', '$roll_no','$imgname','','','')";
		
			$run = mysqli_query($con,$qry);


			if($run == true){

				header('location:password.php/?roll_no='.$roll_no);
			
			
			}
		
			else{
				?><script>alert('Failed');</script>
			<?php
		}
	}
}

	ob_flush();
 ?>