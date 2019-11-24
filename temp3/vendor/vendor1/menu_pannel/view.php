<?php
require('db.php');
require('../../functions.php');
?>
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
</head>
    <body>
	<center><a href="insert.php"><h3>Add new record</h3></a></center>
	     <div class="container">
		<br>
		    <h1 class="text-center text-white bg-dark">
			  Menu Name With price 
			</h1>
			<br>
			<div class="table-responsive">
			
			<table class="table table-bordered table-striped table-hover text-center">
			   <thead class="bg-dark text-white">
			        <th>Id </th>
					<th>VendorId </th>
					<th> MenuName</th>
					<th> MenuPrice</th>
					<th> Profile pic</th>
			   </thead>
			        <tbody>
					<?php
					  $con=mysqli_connect('localhost','root');
					  mysqli_select_db($con,'menu_pannel');
					  if(isset($_POST['submit']))
					  {
						$VendorId=$_POST['VendorId'];  
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
							$q="INSERT INTO `menu`(`VendorId`,`MenuName`,`MenuPrice`,`image`) VALUES ('$VendorId','$MenuName','$MenuPrice','$destinationfile')";
							$query=mysqli_query($con,$q);
							
							$displayquery="SELECT * FROM menu";
							$querydisplay=mysqli_query($con,$displayquery);
							
							//$row=mysqli_num_rows($querydisplay);
							while($result=mysqli_fetch_array($querydisplay))
							{
								?>
								<tr>
								   
								   <td><?php echo $result['id'];?></td>
								   <td><?php echo $result['VendorId'];?></td>
								   <td><?php echo $result['MenuName'];?></td>
								   <td><?php echo $result['MenuPrice'];?></td>
								   <td><img src="<?php echo $result['image'];?>" height="100px" width="200px"></td>
								</tr>
								<?php
							}
							
						}
						else
						{
							echo"Extension is not matching";
						}						
						
					  }  
					
					
					
					?>
					
					
					
					</tbody>
			</table>
			</div>
		</div>
	</body>
</html>