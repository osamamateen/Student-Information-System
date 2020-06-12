<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/forgot.css">
  <title></title>
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
  <form action="forgotpass.php" method="post">
    
      <h3>Forgtot Password?</h3>

    <label for="roll_no">Registration No.</label>
    <input type="text" name="roll_no" placeholder="Your Registration">

    <label for="ques">Select security question</label>
    <select id="ques" name="ques">
      <option value="1">First Pet</option>
      <option value="2">Date of birth</option>
      <option value="3">----</option>
    </select>
    
    <label for="answer">Answer</label>
    <input type="text" name="answer" placeholder="Your answer..">
    
  
    <input type="submit" value="Submit">
  </form>
</div>
</div>
</body>
</html>

<?php 

if(isset($_POST['submit'])){
	$roll_no = $_POST['roll_no'];
  $ques = $_POST['ques'];
  $answer = $_POST['answer'];

  include('dbcon.php');
  $qry = "SELECT * FROM `student2` WHERE roll_no = '$roll_no'";
     
  $result = mysqli_query($con,$qry);
  while ($data = $result->fetch_assoc()) {

  
    
    $sques = $data['ques'];
    $sans = $data['answer'];
    

  

    if($answer == $sans){
      session_start();
    $id = $data['id'];
      $_SESSION['sid'] = $id;
      header('location:student/studentdash.php');

    }

    }
    

}

 ?>
