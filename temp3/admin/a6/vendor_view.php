<?php
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<style>
body
{
	background-image: url("seven.jpg");
	background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
	min-height: 550px;
}
h2
{
	color:yellow; text-decoration:none;	
}
a:visited 
{
  color: blue;
}

	
</style>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="form">

<center><h1><strong>View Records</strong></h1>
<a href="insert.php"><h3>Add new record</h3></a> 

<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>S.No</strong></th><th><strong>name</strong></th><th><strong>address</strong></th><th><strong>Mobile_no</strong></th><th><strong>salary</strong></th><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
</thead>
<tbody>
<?php
$count=1;
$sql_query="Select * from creates ORDER BY id desc;";
$result = mysqli_query($conn,$sql_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["name"]; ?></td><td align="center"><?php echo $row["address"]; ?></td><td align="center"><?php echo $row["Mobile_no"]; ?></td><td align="center"><?php echo $row["salary"]; ?></td><td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td><td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>

<br /><br /><br /><br />

</div>
</body>
</html>
