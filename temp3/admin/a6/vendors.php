<?php
require('db.php');

?>
<!DOCTYPE html>
<html>
<head>
<style>
body
{
	background-image: url("mirch.jpg");
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
color:white; text-decoration:none;	
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
<center><p><h1><strong>Welcome to Admin</strong></h1></p>
<center><h2><p><a href="index.php">Home</a> | <a href="forms.php">Add New Vendor</a> | <a href="vendors_view.php">View Vendor Details</a></p></h2>
</div>

</body>
</html>