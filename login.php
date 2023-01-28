<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
<style>
      body {
  background-image: url('background.jpg');
  background-attachment: fixed;
  background-size: cover;
} 
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 100%;
  position: fixed;
  overflow: hidden;
  background-color: #76323f;
}
li { 
  float: left;
  border-right:1px solid white;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover:not(.active){
  background-color: #111;
}
.card {
  background-color: #d7cec7;
  padding: 30px;
  margin-top: 50px;
}
.leftcolumn {   
  margin: 20px auto;
  width: 75%;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
#eimg {
  background: url('background1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 96%;
}
    </style>
</head>
<body>
<font face="verdana">
<ul>
  <li><a class="active" href="login.php">Home</a></li>
  <li><a href="about.php">About</a></li>
</ul>
<center>
 <div class="row">
  <div class="leftcolumn">
    <div class="card">
        <br><br>
	<h1>Student Database Management System</h3><br>
        <div id="eimg" style="height:400px;"></div>
        <br>
	<form action="" method="POST">
		<input type="submit" name="admin_login" value="Admin Login" required>
		<input type="submit" name="student_login" value="Student Login" required>
	</form>
	<?php
		if(isset($_POST['admin_login'])){
			header("Location: admin_login.php");
		}
		if(isset($_POST['student_login'])){
			header("Location: student_login.php");
		}
	?>
       
     </div>
   </div>
 </div>
</center>
</font>
</body>
</html>