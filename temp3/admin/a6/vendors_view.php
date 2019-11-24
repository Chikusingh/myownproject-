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
	min-width: 0px;
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

<center><h1><strong>View Vendor Details</strong></h1>
<a href="forms.php"><h3>Add New Vendor</h3></a> 

<table width="200%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Full Name</strong></th>
<th><strong>VendorId</strong></th>
<th><strong>Phone</strong></th>
<th><strong>Email</strong></th>
<th><strong>Permanent Address</strong></th>
<th><strong>Shop Location</strong></th>
<th><strong>Rent</strong></th>
<th><strong>Aadhar Number</strong></th>
<th><strong>Approved Time</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sql_query="Select * from vendorsdata ORDER BY id desc;";
$result = mysqli_query($con,$sql_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["user_name"]; ?></td>
<td align="center"><?php echo $row["vendor_id"]; ?></td>
<td align="center"><?php echo $row["phone"]; ?></td>
<td align="center"><?php echo $row["mail"]; ?></td>
<td align="center"><?php echo $row["address"]; ?></td>
<td align="center"><?php echo $row["location"]; ?></td>
<td align="center"><?php echo $row["rent"]; ?></td>
<td align="center"><?php echo $row["aadhar"]; ?></td>
<td align="center"><?php echo $row["approvalTime"]; ?></td>
<td align="center"><a href="vendor_edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
<td><a href="vendor_delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>

<br /><br /><br /><br />

</div>
</body>
</html>
