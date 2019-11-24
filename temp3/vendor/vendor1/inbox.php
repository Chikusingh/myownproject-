<?php
  global $var1; $count;
  
  function fetchVendorData(){
              
             
              $host = 'localhost';
              $user = 'root';
              $pass = '';
              $dbname='admin';
              $conn = mysqli_connect($host, $user, $pass, $dbname); 
              $flag=0;
              $vendor_id=$_POST['vendor_id'];
              $result=mysqli_query($conn,"SELECT * FROM vendor_message WHERE vendor_id='$vendor_id'");
              while($row=mysqli_fetch_array($result))
               {
                 $flag=1;
                 echo "<tr>";
                  
                 echo "<strong>"."Date: "."</strong>";
                 echo "<td>". $row['date'] . "</td>"; echo "</br>";
                
                 echo "<strong>"."Subject: "."</strong>";
                 echo "<td>" . $row['subject'] . "</td>";echo "</br>";
                  
                 echo "<strong>"."Message: "."</strong>";
                 echo "<td>" . $row['msg'] . "</td>";echo "</br></br>";
                 
                 
				 
                 echo"</tr>";
                 $var1=$vendor_id;
                 
              }
                  if($flag==0)
                    {
                      echo "Please Enter Correct Details"."<small><strong>"." no data found"."</strong></small>";
                    }
                 $count=0;
                 //setData($var1,$count);
                }
function setData($var1,$count){
    echo "<input type='text' name='box' value='$var1'/>";
      
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Advanced Form</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-bar"></span>
                    <span class="fa fa-bar"></span>
                    <span class="fa fa-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Vendor</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right; 
font-size: 16px;"> <a href="index.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>      
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <center><h2><strong>Advance Forms</strong></h2></center>   
                        <center><h5><strong>Welcome Vendor, You Can Search Your messages</strong></h5></center>
                        <h5><?php
         $host = 'localhost';
         $user = 'root';
         $pass = '';
         $dbname='admin';
         $conn = mysqli_connect($host, $user, $pass, $dbname);
         
         if(! $conn ) {
            die('error: ' . mysqli_error());
         }
         echo 'Database up and Running';
                            
        // mysqli_close($conn);
      ?></h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                
                <div class="row">
                    <div class="col-md-12">
                     <!--  Form beginning  -->
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Fetch Vendor data
                            </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                 
                                    <form role="form" action="" method="post">
                                     <div class="form-group">
                                        <label> Enter VendorId</label>
                                        <input class="form-control" name="vendor_id" placeholder="Enter Vendor Id" required/><br>
                                         
                                        </div>
										<div>
                                          <button type="submit" name="submit"  value="upload" class="btn btn-default">Submit</button>
                                        </div>
    
                                    
                                    
                                    </form>
                                
                                
                                </div>
                                
                                
                        <div class="col-md-6">
                            <h3>vendor data</h3>
                            <div style="margin-top: 30px;">
                                
                                    <?php
                                    if(isset($_POST['submit'])){
                                       fetchVendorData();
                                    }
                                ?>
                                
                            </div>
                                </div>
                            </div>
                            </div> 
                        </div>
                    </div>
                    </div>
                
				
				
				<!-- For Menu Search-->
				
				<?php
  global $var1; $count;
  
  function fetchMenuData(){
              
             
              $host = 'localhost';
              $user = 'root';
              $pass = '';
              $dbname='menu_pannel';
              $conn = mysqli_connect($host, $user, $pass, $dbname); 
              $flag=0;
              $VendorId=$_POST['VendorId'];
              $result=mysqli_query($conn,"SELECT * FROM menu WHERE VendorId='$VendorId'");
              while($row=mysqli_fetch_array($result))
               {
                 $flag=1;
                 echo "<tr>";
                 
                 echo "<strong>"."ItemName: "."</strong>";
                 echo "<td>". $row['MenuName'] . "</td>"; echo "</br>";
                
                 echo "<strong>"."ItemPrice: "."</strong>";
                 echo "<td>" . $row['MenuPrice'] . "</td>";echo "</br></br>";
             
                 echo"</tr>";
                 $var1=$VendorId;
                
              }
                  if($flag==0)
                    {
                      echo "Please Enter Correct VendorId"."<small><strong>"." no data found"."</strong></small>";
                    }
                 $count=0;
                 //setData($var1,$count);
                }
function setData1($var1,$count){
    echo "<input type='text' name='box' value='$var1'/>";
      
}

?>
				
                                
                                
                        
                    </div>
                    </div>
                
				
				
			
                 
                
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
 
</body>
</html>

