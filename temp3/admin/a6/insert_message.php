<html>
<head>
      <title></title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<?php
require('db.php');
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
	date_default_timezone_set("Asia/Calcutta");
    $date = date("Y-m-d h:i:s");
	$heading =$_REQUEST['heading'];
    $message = $_REQUEST['message'];
    $sql_query="insert into messages
    (`date`,`heading`,`message`)values
    ('$date','$heading','$message')";
    mysqli_query($con,$sql_query)
    or die(mysqli_error($con));
    $status = "New Record Inserted Successfully.
    </br></br><a href='message_view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
body
{
	background-image: url("2.png");
	background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
	min-height: 550px;
}
h1
{
color:yellow; text-decoration:none;	
}
a
{
	color:yellow; text-decoration:none;	
}
a:visited 
{
  color: blue;
}


</style>
<meta charset="utf-8">
<title>insert New Announcement</title>
<link rel="stylesheet" href="style.css" />
</head>
<center>
<body>
<div class="form">
<p><a href="message.php"><strong>Dashboard<strong></a> 
| <a href="message_view.php"><strong>View All The Message Records</strong></a> 
| <a href="index.php"><strong>Logout</strong></a></p>
<div>

<h1><strong>Insert New Announcement</strong></h1>
<form name="form" method="post" action="insert_message.php"> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="heading" placeholder="Enter Announcement heading" required /></p>
<p><input type="text" name="message" placeholder="Enter message" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>

<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>
