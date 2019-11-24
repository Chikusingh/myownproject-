<?php
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<style>
body
{
	background-image: url("images.jpg");
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

<center><h1><strong>View Announcement</strong></h1>
<a href="insert_message.php"><h3>Add New Announcement</h3></a> 

<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>S.No</strong></th><th><strong>Date</strong></th><th><strong>Announcement Heading</strong></th><th><strong>Message</strong></th><th><strong>Delete</strong></th></tr>
</thead>
<tbody>
<?php
$count=1;
$sql_query="Select * from messages ORDER BY id desc;";
$result = mysqli_query($con,$sql_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["date"]; ?></td><td align="center"><?php echo $row["heading"]; ?></td><td align="center"><?php echo $row["message"]; ?></td><td align="center"><a href="message_delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>

<br /><br /><br /><br />

</div>
</body>
</html>
