<?php
require('db.php');
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $trn_date = date("Y-m-d H:i:s");
    $name =$_REQUEST['name'];
	$address =$_REQUEST['address'];
    $Mobile_no = $_REQUEST['Mobile_no'];
	$salary = $_REQUEST['salary'];
    //$submittedby = $_SESSION["username"];
    $sql_query="insert into creates
    (`trn_date`,`name`,`address`,`Mobile_no`,`salary`)values
    ('$trn_date','$name','$address','$Mobile_no','$salary')";
    mysqli_query($conn,$sql_query)
    or die(mysqli_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
body
{
	background-image: url("3.jpg");
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
<title>insert New Record</title>
<link rel="stylesheet" href="style.css" />
</head>
<center>
<body>
<div class="form">
<p><a href="dashboard.php"><strong>Dashboard<strong></a> 
| <a href="view.php"><strong>View Records</strong></a> 
| <a href="logout.php"><strong>Logout</strong></a></p>
<div>

<h1><strong>Insert New Record</strong></h1>
<form name="form" method="post" action="insert.php"> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="name" placeholder="Enter Name" required /></p>
<p><input type="text" name="address" placeholder="Enter address" required /></p>
<p><input type="text" name="Mobile_no" placeholder="Enter Mobile_no" required /></p>
<p><input type="text" name="salary" placeholder="Enter salary" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>

<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>
