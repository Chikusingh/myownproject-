<?php 
require('db1.php');
 ?>
 
 <?php
 if(isset($_POST['login_btn']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	
      
	$sql_query="Select * from vendorsdata where user_name='".$username."'AND password='".$password."' limit 7";
	$result = mysqli_query($conn,$sql_query);
	if(mysqli_num_rows($result)==1)
	{
		$_SESSION["username"]=$uname;
		header("location: vendor1/index.php");
		exit();
	}
	else
	{
		echo "you have entered Incorrect password";
		exit();
	}
	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style>
body
{
	background-image: url("yy.jpg");
	background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
	min-height: 550px;
}
</style>
</head>
<body>
	<div class="header">
		<h2>Login  page for kiosk Vendors</h2>
	</div>
	<form method="post" action="#">
        <div class="input-group">
			<label>Username:</label>
			<input type="text" id="username "name="username" required >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" id="password" name="password" required>
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
            <button type="Reset" class="btn" name="reset_btn">Reset</button>
			
		</div>
		
		
		
		<br>
		
	</form>
</body>
</html>