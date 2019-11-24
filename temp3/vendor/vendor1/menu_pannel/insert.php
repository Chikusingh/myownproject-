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
h2
{
color:yellow; text-decoration:none;	
}
a
{
	color:blue; text-decoration:none;	
}
a:visited 
{
  color: yellow;
}

</style>
</head>
    <body>
	<center>
	<div class="form">
<h2><p><a href="dashboard.php"><strong>Dashboard<strong></a> 
| <a href="view1.php"><strong>View Records</strong></a> 
| <a href="logout.php"><strong>Logout</strong></a></p></h2>
<center>
<div>
	    <div class="container">
		<br>
		    <h1 class="text-white bg-dark text-center">
			Add New Menu
			</h1>
			<div class="col-lg-8 m-auto d-block">
			<div style="color:white">
			<form action="view.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				     <label for="menu"> VendorId: </label>
					 <input type="text" name="VendorId" id="vendor_id" class="form-control">
				 </div>
			     <div class="form-group">
				     <label for="menu"> MenuName: </label>
					 <input type="text" name="MenuName" id="menu" class="form-control"
				 </div>
				 <div class="form-group">
				     <label for="menu_price"> MenuPrice: </label>
					 <input type="text" name="MenuPrice" id="menu_price" class="form-control"
				 </div>
				 
				 <div class="form-group">
				     <label for="file"> Menu pic: </label>
					 <input type="file" name="file" id="file" class="form-control"
				 </div>
				 </div>
				 <br><input type="submit" name="submit" value="submit" class="btn btn-success">
			</form>
			</div>
		</div>
	
	
	</body>
</html>