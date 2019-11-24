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
<center><p><h1><strong>Welcome In Announcement Page</strong></h1></p>
<center><h2><p><a href="../a6/index.php">Home</a> | <a href="insert_message.php">Send New Announcement</a> | <a href="message_view.php">View Announcement</a></p></h2>
</div>

</body>
</html>