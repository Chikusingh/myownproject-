<?php
require('db.php');
$id=$_REQUEST['id'];
$query = "SELECT * from menu where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error($con));
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<style>
body
{
	background-image: url("9.jpg");
	background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
	min-height: 550px;
}
h1
{
	color:blue;
}
a:visited 
{
  color: red;
}
</style>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="form">
<center><h2><p><a href="dashboard.php">Dashboard</a> | <a href="insert.php">Insert New Record</a> | <a href="logout.php">Logout</a></p></h2>
<center><h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$MenuName =$_REQUEST['MenuName'];
$MenuPrice =$_REQUEST['MenuPrice'];
$update="update menu set MenuName='".$MenuName."', MenuPrice='".$MenuPrice."'where id='".$id."'";
mysqli_query($con,$update) or die (mysqli_error($con));
$status = "Record Updated Successfully. </br></br><a href='view1.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="MenuName" placeholder="Enter MenuName" required value="<?php echo $row['MenuName'];?>" /></p>
<p><input type="text" name="MenuPrice" placeholder="Enter MenuPrice" required value="<?php echo $row['MenuPrice'];?>" /></p>

<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>

<br /><br /><br /><br />

</div>
</div>
</body>
</html>
