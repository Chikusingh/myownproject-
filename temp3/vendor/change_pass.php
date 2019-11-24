
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
.blinking{
    animation:blinkingText 1.2s infinite;
}
@keyframes blinkingText{
    0%{     color: white;    }
    100%{    color: transparent; }
    150%{    color: transparent; }
   200%{    color:transparent;  }
    250%{   color: white;    }
}
input[type='submit']{padding: 10px 25px 8px; color: #fff; background-color: #0067ab; text-shadow: rgba(0,0,0,0.24) 0 1px 0; font-size: 16px; box-shadow: rgba(255,255,255,0.24) 0 2px 0 0 inset,#fff 0 1px 0 0; border: 1px solid #0164a5; border-radius: 2px; margin-top: 10px; cursor:pointer;}
input[type='submit']:hover {background-color: #024978;}

input[type='Reset']{padding: 10px 25px 8px; color: #fff; background-color: #0067ab; text-shadow: rgba(0,0,0,0.24) 0 1px 0; font-size: 16px; box-shadow: rgba(255,255,255,0.24) 0 2px 0 0 inset,#fff 0 1px 0 0; border: 1px solid #0164a5; border-radius: 2px; margin-top: 10px; cursor:pointer;}
input[type='Reset']:hover {background-color: #024978;}

</style>
</head>
<body>
<div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <!--Last access : 30 May 2014--> &nbsp; <a href="index.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>

	<div class="header">
		<h2><strong><span class="blinking">Change Password</span></strong></h2>
	</div>
	<form method="post" action="#">
        <div class="input-group">
			<label><strong>Enter VendorId:</strong></label>
			<input type="text" name="id" required>
		</div>
		<div class="input-group">
			<label><strong>Enter Existing Password</strong></label>
			<input type="text" name="old" required>
		</div>
		<div class="input-group">
			<label><strong>Enter New Password</strong></label>
			<input type="text" name="new1"required>
		</div>
		<div class="input-group">
		<label><strong>Retype New Password</strong></label>
			<input type="text" name="new2">
		</div>
		<center><p><input name="submit" type="submit" value="Submit" /></p>
		<p><input name="Reset" type="Reset" value="Reset" /></p>
        <?php
         if(isset($_POST['submit'])){
             changepassword();
         }
        ?>
		<p><a href="../login.php">Back To Login Page</a>
    </form>
	
	
		
	</form>
</body>
</html>
<?php
  
function changepassword(){
    $host = 'localhost';
   $user = 'root';
   $pass = '';
   $dbname='admin';
   $conn = mysqli_connect($host, $user, $pass, $dbname);
   if(! $conn ) {
    die('error: ' . mysqli_error($conn));
    }
else{
    echo 'Database up and Running';
    echo "</br>";
    }
$old=$_POST['old'];
$new1=$_POST['new1'];
$new2=$_POST['new2'];
$id=$_POST['id'];

$sql=mysqli_query($conn,"SELECT * FROM vendorsdata WHERE vendor_id='$id'");
$row=mysqli_fetch_array($sql);
$temp=$row['password'];
if($new1==$new2){
if($old==$temp){
    echo "old password matched";
    $query=mysqli_query($conn,"UPDATE vendorsdata SET password='$new1' WHERE vendor_id='$id' ");
    if(! $query ) {
    die('error: ' . mysqli_error($conn));
    }
    else{
    echo 'PASSWORD CHANGED.';
    echo "</br>";
    }
}
else{
    echo "old password incorrect";
}
}
else{
    echo"New password does not match";
}
        }
            
?>