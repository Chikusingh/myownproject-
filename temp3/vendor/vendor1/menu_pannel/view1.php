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
<title>View Records</title>
<link rel="stylesheet" href="style.css" />

</head>
<body>
<div class="form">

<center><h1><strong>View Records</strong></h1>
<h2><a href="insert.php">Add new record</a></h2> 
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>Id</strong></th><th><strong>VendorId</strong></th><th><strong>MenuName</strong></th><th><strong>MenuPrice</strong></th><th><strong>Profile pic</strong></th>h><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>                                                                                                                                                                                                                                                                                                                                  
</thead>
<tbody>
<?php
if(isset($_POST['submit']))
					  { $VendorId=$_POST['VendorId'];
						$MenuName=$_POST['MenuName'];  
						$MenuPrice=$_POST['MenuPrice'];  
						$files=$_FILES['file']; 
                        //print_r($MenuName);
						//echo "<br>";
                        //print_r($files);
                         
						$filename=$files['name'];
						//print_r($filename);
						$error=$files['error'];
						$filetmp=$files['tmp_name'];
						
						$fileext=explode('.',$filename);
						$filecheck=strtolower(end($fileext));
						
						$fileextstored=array('png','jpg','jpeg');
						
						if(in_array($filecheck,$fileextstored))
						{
							$destinationfile='upload/'.$filename;
							move_uploaded_file($filetmp,$destinationfile);
							$q="INSERT INTO `menu`('VendorId',`MenuName`,`MenuPrice`,`image`) VALUES ('$VendorId','$MenuName','$MenuPrice','$destinationfile')";
							$query=mysqli_query($con,$q);
							
							$displayquery="SELECT * FROM menu";
							$querydisplay=mysqli_query($con,$displayquery);
					    }
					  }
$count=1;
$sql_query="Select * from menu ORDER BY id desc;";
$result = mysqli_query($con,$sql_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["VendorId"]; ?></td><td align="center"><?php echo $row["MenuName"]; ?></td><td align="center"><?php echo $row["MenuPrice"]; ?></td><td align="center"><img src="<?php echo $row['image'];?>" height="100px" width="100px"></td><td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td><td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>

<br /><br /><br /><br />

</div>
</body>
</html>
