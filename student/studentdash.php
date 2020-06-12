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

<?php
include("../dbcon.php");

		$id = $_SESSION['sid'];

		$qry = "SELECT * FROM `student2` WHERE `id` = '$id'";

		$run = mysqli_query($con,$qry);

		if(mysqli_num_rows($run)<1){
			echo "<tr><td colspan = 8>No Record Found<td><tr>";
		}
		else{
			$count = 0;
			while($data = $run->fetch_assoc()){
				$count++;
				?>

				<table  style="margin-top: 20px; margin-left: 80px;" cellpadding="7px">
					
						
						<tr>
							<td colspan="2"><img src="../dataimg/<?php echo $data['image'];?>" style = "max-width: 150px; margin-top: 30px;"/><br><br></td>
						</tr>

						<tr>
							<th>Registration No.</th>
							<td><?php echo $data['roll_no']; ?></td>
							<th>Name</th>
							<td><?php echo $data['fname']." ".$data['lname']; ?></td>
						</tr>

						<tr>
							<th>Date OF Birth</th>
							<td><?php echo $data['dob']; ?></td>
							<th>Email</th>
							<td><?php echo $data['email']; ?></td>
						</tr>

						<tr><th>Mobile</th><td><?php echo $data['mobile']; ?></td>
							<th>Gender</th><td><?php echo $data['gender']; ?></td></tr>
						

						<tr rowspan="2"><th>Address</th><td><?php echo $data['address']; ?></td>
							<th>CNIC</th><td><?php echo $data['cnic']; ?></td>
						</tr>
						

						<tr><th>ZIP</th><td><?php echo $data['zip']; ?></td>
							<th>Country</th><td><?php echo $data['country']; ?></td>
						</tr>
						

						<tr><th>Domicile</th><td><?php echo $data['domicile']; ?></td>
							<th>SSC Board</th><td><?php echo $data['ssc_board']; ?></td>
						</tr>
						

						<tr><th>SSC Percentage</th><td><?php echo $data['ssc_perc']; ?></td>
							<th>SSC Year Of Passing</th><td><?php echo $data['ssc_year']; ?></td>
						</tr>

						<tr><th>HSC Board</th><td><?php echo $data['hsc_board']; ?></td>
							<th>HSC Percentage</th><td><?php echo $data['hsc_perc']; ?></td>
						</tr>
						
						<tr><th>HSC Year Of Passing</th><td><?php echo $data['hsc_year']; ?></td>
							<th>Program</th><td><?php echo $data['program']; ?></td>
						</tr>
						
				</table>
				<?php
			}
		}
?>


</div>
	
</body>
</html>
