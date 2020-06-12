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

 <div class="content" style="text-align: left;">

  <form action="updateinfo.php" method="post">

 		<?php 

 			include("../dbcon.php");

 			$id = $_SESSION['sid'];

 			$qry = "SELECT * FROM `student2` WHERE `id` = '$id'";
 			$run = mysqli_query($con,$qry);
 			while($data = $run->fetch_assoc()){
 				?>

 				<table  style="margin-top: 20px; margin-left: 100px; color: #800000;" cellpadding="5px">
					
						
						<tr>
							<td colspan="4"><img src="../dataimg/<?php echo $data['image'];?>" style = "max-width: 150px"/><br><br></td>
							<td><input type="file" name="image"></td>
						</tr>

						<tr>
							<th>Registration No.</th>
							<td><?php echo $data['roll_no']; ?></td>
							<th>Name</th>
							<td><?php echo $data['fname']." ".$data['lname']; ?></td>
							<th>CNIC</th>
							<td><?php echo $data['cnic']; ?></td>
						</tr>

						<tr>
							<th>Date OF Birth</th>
							<td><?php echo $data['dob']; ?></td>
							<th>Gender</th><td><?php echo $data['gender']; ?></td>
							<th>Program</th><td><?php echo $data['program']; ?></td>
						</tr>
				</table>



				<table style="margin-left: 100px;" cellpadding="7px">

						<tr>
							<th>Mobile</th>
							<td><input type="text" name="mobile" value="<?php echo $data['mobile']; ?>"></td>
							<th>Email</th>
							<td><input type="email" name="email" value="<?php echo $data['email']; ?>"></td>
						</tr>
						

						<tr rowspan="2">
							<th>Address</th>
							<td><input type="text" name="address" value="<?php echo $data['address']; ?>"></td>
							<th>ZIP</th>
							<td><input type="text" name="zip" value="<?php echo $data['zip']; ?>"></td>	
						</tr>
						

						<tr>
							<th>Country</th>
							<td><input type="text" name="country" value="<?php echo $data['country']; ?>"></td>
							<th>Domicile</th>
							<td><input type="text" name="domicile" value="<?php echo $data['domicile']; ?>"></td>
							
						</tr>
						

						<tr>
							<th>SSC Board</th>
							<td><input type="text" name="ssc_board" value="<?php echo $data['ssc_board']; ?>"></td>
							<th>SSC Percentage</th>
							<td><input type="text" name="ssc_perc" value="<?php echo $data['ssc_perc']; ?>"></td>
							
						</tr>

						<tr>
							<th>SSC Year Of Passing</th>
							<td><input type="text" name="ssc_year" value="<?php echo $data['ssc_year']; ?>"></td>
							<th>HSC Board</th>
							<td><input type="text" name="hsc_board" value="<?php echo $data['hsc_board']; ?>"></td>
							
						</tr>
						
						<tr>
							<th>HSC Percentage</th>
							<td><input type="text" name="hsc_perc" value="<?php echo $data['hsc_perc']; ?>"></td>
							<th>HSC Year Of Passing</th>
							<td><input type="text" name="hsc_year" value="<?php echo $data['hsc_year']; ?>"></td>
						</tr>

						<tr>
							<td colspan="4"><center><br><input type="submit" name="submit" value="save" style="margin-top: 10px; padding: 4px 30px;"></center></td>
						</tr>
					
				</table>


 				<?php

 				
 				
 			}
?>

 			

 			
 		 </form>
  
</div>



 <body>
  <html>
  <?php
  if (isset($_POST['submit'])) {
 				$id= $_SESSION['sid'];


				$email = $_POST['email'];
				$mobile = $_POST['mobile'];
				$address = $_POST['address'];
				$zip = $_POST['zip'];
				$country = $_POST['country'];
				$domicile = $_POST['domicile'];
				$ssc_board = $_POST['ssc_board'];
				$ssc_perc = $_POST['ssc_perc'];
				$ssc_year = $_POST['ssc_year'];
				$hsc_board = $_POST['hsc_board'];
				$hsc_perc = $_POST['hsc_perc'];
				$hsc_year = $_POST['hsc_year'];

				

				$qry = "UPDATE 'student2' 
						SET 
						email = '$email', 
						mobile = '$mobile',
						address = '$address',
						zip = '$zip',
						country = '$country',
						domicile = '$domicile',
						ssc_board = '$ssc_board',
						ssc_perc = '$ssc_perc',
						ssc_year = '$ssc_year',
						hsc_board = '$hsc_board',
						hsc_perc = '$hsc_perc',
						hsc_year = '$hsc_year'
	
						WHERE id='$id'";


				$run = mysqli_query($con,$qry);
				if($run){
					echo "Saved";
				}
			
 			}

 			
 		 ?>