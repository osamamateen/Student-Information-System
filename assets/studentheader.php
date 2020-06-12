<!DOCTYPE html>
<head>
<title>Student Dashboard</title>

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
  display: block; 
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #333;
  color: #fff;
}

.topnav span{
  display: inline-block;
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  padding: 12px 16px;

}

.sidenav {
  height: 100%;
  width: 250px;
  position: fixed;
  background-color: #111;
  overflow-x: hidden;
}

/* Side navigation links */
.sidenav a {
  color: white;
  padding: 16px;
  text-decoration: none;
  display: block;
  border-top: 1px solid #fff;
}

.sidenav a:hover {
  background-color:#800000;
  color: #fff;
}

/* Style the content */
.content {
  margin-top:0; 
  margin-left: 250px;
  padding-left: 20px;
  height: 80vh; /* Should be removed. Only for demonstration */
}
</style>
</head>
<body>


<div class="topnav">
  <span class="logo">Student Dashboard</a></span>
  <a href="../Student/logout.php">Logout</a>
  <a href="../Student/editprofile.php">Change Password</a>
</div>


<div class="sidenav">
  <a href="studentdash.php">Veiw Profile</a>
  <a href="updateinfo.php">Update Profile</a>
</div>
