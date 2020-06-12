<?php 
	session_start();
		if(isset($_SESSION['sid'])){
		echo "";
		}

		else{
			header('location:../studentlogin.php');
		}

	include('../assets/studentheader.php');
 ?>

 <div class="content">
 	<div class="upper">
 		<h2>Edit Profile</h2>

 			<form action="editprofile.php" method="post">

 		<?php 

 			include("../dbcon.php");

 			$id = $_SESSION['sid'];

 			$qry = "SELECT * FROM `student2` WHERE `id` = '$id'";
 			$run = mysqli_query($con,$qry);
 			while($data = $run->fetch_assoc()){
 				echo "<p style='font-size:20px;'>Name:".$data['fname']." ".$data['lname']."</p>";
 				echo "<p style='font-size:20px;'>Reg no:".$data['roll_no']."</p>";
 				echo "Password: ";
 				$pass = $data['password'];
 				echo "<input type='password' name='password' size='15' required value='$pass' style='margin:20px; font-size:20px;'>";
 				
 				
 			}


 			echo "<br><input type='submit' name='change' value='Change Password' style='margin:20px; '>";

 			if (isset($_POST['change'])) {
 				$id= $_SESSION['sid'];
				$pass=$_POST['password'];
				$qry = "UPDATE student2 SET password='$pass' WHERE id='$id'";
				$run = mysqli_query($con,$qry);
				echo " Password Changed";
 			}

 			
 		 ?>
 		 </form>
 	</div>
 </div>
