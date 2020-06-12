<!DOCTYPE html>
<head>
<title>Admin Dashboard</title>
<style>
* {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
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
  border-bottom: 1px solid #fff;
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

.upper{
  margin-left: 60px;
  margin-top: 30px;
}
</style>
</head>
<body>


<div class="topnav">
  <span class="logo">Admin Dashboard</a></span>
  <a href="../admin/logout.php">Logout</a>
  <a href="../admin/changepass.php">Edit Profile</a>
</div>


<div class="sidenav">
  <a href="admindash.php">Veiw Student Records</a>
</div>
