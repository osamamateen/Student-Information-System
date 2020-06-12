<?php 
	session_start();
		if(isset($_SESSION['uid'])){
		echo "";
		}

		else{
			header('location:../adminlogin.php');
		}

	include('../assets/adminheader.php');
 ?>

 <div class="content">
 	<div class="upper">
 		<h2>Edit Profile</h2>

 			<form action="changepass.php" method="post">

 		<?php 

 			include("../dbcon.php");

 			$id = $_SESSION['uid'];

 			$qry = "SELECT * FROM `admin` WHERE `id` = '$id'";
 			$run = mysqli_query($con,$qry);
 			while($data = $run->fetch_assoc()){
 				echo "Username: ".$data['username'];
 				echo "<br> Password: ";
 				$pass = $data['password'];
 				echo "<input type='password' name='password' size='15' required value='$pass'>";
 				
 				
 			}

 			echo "<input type='submit' name='change' value='Change Password'>";

 			if (isset($_POST['change'])) {
 				$id= $_SESSION['uid'];
				$pass=$_POST['password'];
				$qry = "UPDATE admin SET password='$pass' WHERE id='$id'";
				$run = mysqli_query($con,$qry);
				echo " Password Changed";
 			}

 			
 		 ?>
 		 </form>
 	</div>
 </div>
