<?php
require('db.php');
$id=$_REQUEST['id'];
$query = "SELECT * from creates where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
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
  color: Red;
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
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];
$address =$_REQUEST['address'];
$Mobile_no =$_REQUEST['Mobile_no'];
$salary =$_REQUEST['salary'];
//$submittedby = $_SESSION["username"];
$update="update creates set trn_date='".$trn_date."', name='".$name."', address='".$address."', Mobile_no='".$Mobile_no."', salary='".$salary."'where id='".$id."'";
mysqli_query($conn, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br><a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="name" placeholder="Enter Name" required value="<?php echo $row['name'];?>" /></p>
<p><input type="text" name="address" placeholder="Enter address" required value="<?php echo $row['address'];?>" /></p>
<p><input type="text" name="Mobile_no" placeholder="Enter Mobile_no" required value="<?php echo $row['mobile_no'];?>" /></p>
<p><input type="text" name="salary" placeholder="Enter salary" required value="<?php echo $row['salary'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>

<br /><br /><br /><br />

</div>
</div>
</body>
</html>
