<!DOCTYPE html>
<head>
<title>CSS Template</title>
<style>
* {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  overflow-y: hidden;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #800000;
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
  background-color: #333;
  color: black;
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
/* Style the content */
.content {
  margin-top:0; 
  height: 80vh; /* Should be removed. Only for demonstration */
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