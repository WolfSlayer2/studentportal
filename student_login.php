<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
<style>
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
      #grad {
        height: 800px;
        background-image: url('background3.jpg');
        background-repeat: no-repeat;
        background-size: cover;
      }
      #box {
        background-color: white;
        width: 60%;
        border: 5px solid peachpuff;
        padding: 20px;
        margin: 20px auto;
        margin-top: 200px;
      }
    </style>
</head>
<body>
<ul>
  <li><a href="login.php">Home</a></li>
  <li><a href="about.php">About</a></li>
</ul>
<div id="grad">
	<center><br><br>
         <div id="box">
		<h3>Student Login Page</h3><br>
		<form action="" method="post">
			Email ID: <input type="text" name="email" required><br><br>
			Password: <input type="password" name="password" required><br><br>
			<input type="submit" name="submit" value="LogIn">
		</form><br>
		<?php
			session_start();
			if(isset($_POST['submit']))
			{
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"sms");
				$query = "select * from students where email = '$_POST[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					if($row['email'] == $_POST['email'])
					{
						if($row['password'] == $_POST['password'])
						{
							$_SESSION['name'] =  $row['name'];
							$_SESSION['email'] =  $row['email'];
							header("Location: student_dashboard.php");
						}
						else{
							?>
							<span>Wrong Password !!</span>
							<?php
						}
					}
					else
					{
						?>
						<span>Wrong UserName !!</span>
						<?php
					}
				}
			}
		?>
         </div>
	</center>
</div>
</body>
</html>