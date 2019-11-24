<?php
require('db.php');

?>
<!DOCTYPE html>
<html>
<head>
<style>
body
{
	background-image: url("1.jpg");
	background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
	min-height: 550px;
}
p
{
	color:#ffffff; text-decoration:none;
}
h1
{
color:black; text-decoration:none;	
}
a:visited 
{
  color: blue;
}


	

</style>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="form">
<center><p><h1><strong>Welcome to Dashboard</strong></h1></p>
<center><h2><p><a href="../index.php">Home</a> | <a href="insert.php">Insert New Record</a> | <a href="view1.php">View Records</a></p></h2>
</div>

</body>
</html>