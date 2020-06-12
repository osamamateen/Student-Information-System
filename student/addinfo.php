<?php
		// session_start();
		// 		if(isset($_SESSION['sid'])){
		// 			echo "";
		// 		}

		// 		else{
		// 			header('location:../studentlogin.php');
		// 		}

include('../assets/header.php');

?>


<div class="content">
		<form action="addinfo.php" method="POST" enctype="multipart/form-data">
			<table cellpadding="5px">
				<tr>
					<td>Full Name</td>
					<td><input type="text" name="name" required></td>
				</tr>

				<tr>
					<td>City</td>
					<td><input type="text" name="city"></td>
				</tr>

				<tr>
					<td>Contact</td>
					<td><input type="text" name="contact" required></td>
				</tr>

				<tr>
					<td>Address</td>
					<td><input type="text" name="address" required></td>
				</tr>

				<tr>
					<td>Program</td>
					<td><input type="text" name="program" required></td>
				</tr>

				<tr>
					<td>Image</td>
					<td><input type="file" name="image"></td>
				</tr>

				<tr >
					<td colspan="2"> <center><input type="submit" name="submit" ></center></td>
				</tr>
			</table>

			
		</form>
</div>
</body>
</html>

<?php 
	if (isset($_POST['submit'])){

		include('../dbcon.php');
		$name = $_POST['name'];
		$city = $_POST['city'];
		$contact = $_POST['contact'];
		$address = $_POST['address'];
		$program = $_POST['program'];
		$imgname = $_FILES['image']['name'];
		$tempname = $_FILES['image']['tmp_name'];

		move_uploaded_file($tempname, "../dataimg/$imgname");


		$qry = "INSERT INTO `student` (`std_id`, `password`, `name`, `city`, `contact`, `address`, `program`, `image`) VALUES ('', 'student', '$name', '$city', '$contact', '$address', '$program', '$imgname')" ;
		$run = mysqli_query($con,$qry);

		if($run==true){
			echo "inserted";
		}
		else{
			echo error;
		}
		
	}
 ?>