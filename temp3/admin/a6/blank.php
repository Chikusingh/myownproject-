<?php
   $host = 'localhost';
   $user = 'root';
   $pass = '';
   $dbname='admin';
   $conn = mysqli_connect($host, $user, $pass, $dbname);
   if(! $conn ) {
    die('error: ' . mysql_error());
    }
else{
    echo 'Database up and Running';
}
  function updateaadhar($image){
   $host = 'localhost';
   $user = 'root';
   $pass = '';
   $dbname='admin';
   $conn = mysqli_connect($host, $user, $pass, $dbname);
      $vendorid=$_POST['vendorid'];
      echo "$vendorid";
      $sql="INSERT INTO aadharpic(vendor_id, aadhar) VALUES('$vendorid','$image')";
      $result=mysqli_query($conn,$sql);
      if($result)
        {
            echo " <br/>Image uploaded.";
            //header('location:f.php');
        }
        else
        {
            echo " error: Addhar already Exists. ";
        }
  }


function updatepic($image){
   $host = 'localhost';
   $user = 'root';
   $pass = '';
   $dbname='admin';
   $conn = mysqli_connect($host, $user, $pass, $dbname);
      $vendorid=$_POST['vendorid'];
      $sql="INSERT INTO vendorphoto(vendor_id, photo) VALUES('$vendorid','$image')";
      $result=mysqli_query($conn,$sql);
      if($result)
        {
            echo " <br/>Image uploaded.";
            //header('location:f.php');
        }
        else
        {
            echo " error: Vendor's Photo already Exists. ";
        }
  }

function updatedoc($image){
   $host = 'localhost';
   $user = 'root';
   $pass = '';
   $dbname='admin';
   $conn = mysqli_connect($host, $user, $pass, $dbname);
      $vendorid=$_POST['vendorid'];
      $sql="INSERT INTO bankdoc(vendor_id, doc) VALUES('$vendorid','$image')";
      $result=mysqli_query($conn,$sql);
      if($result)
        {
            echo " <br/>Image uploaded.";
            //header('location:f.php');
        }
        else
        {
            echo " Error: Vendor's bank document already Exists. ";
        }
  }
 function fetchVendorData(){
              
             
              $host = 'localhost';
              $user = 'root';
              $pass = '';
              $dbname='admin';
              $conn = mysqli_connect($host, $user, $pass, $dbname); 
              $flag=0;
              $fname=$_POST['fname'];
              $lname=$_POST['lname'];
              $phone=$_POST['phone'];
              $result=mysqli_query($conn,"SELECT * FROM vendors WHERE phone='$phone' AND fname='$fname'");
              while($row=mysqli_fetch_array($result))
               {
                 $flag=1;
                 echo "<tr>";
                 echo "<strong>"."ID: "."</strong>";
                 echo "<td>". $row['vendor_id'] . "</td>"; echo "</br>";
                  
                 echo "<strong>"."Name: "."</strong>";
                 echo "<td>". $row['fname'] . "</td>"; echo "</br>";
                
                 echo "<strong>"."Phone: "."</strong>";
                 echo "<td>" . $row['phone'] . "</td>";echo "</br>";
                  
                 echo "<strong>"."Email: "."</strong>";
                 echo "<td>" . $row['mail'] . "</td>";echo "</br>";
                 
                 echo "<strong>"."Location: "."</strong>";
                 echo "<td>" . $row['location'] . "</td>";echo "</br>";
                 echo "<strong>"."Rent: "."</strong>";
                 echo "<td>". $row['rent'] . "</td>"; echo "</br>";
                  
                 echo "<strong>"."Approval Duration: "."</strong>";
                 echo "<td>". $row['approvalTime'] . " Months"."</td>"; echo "</br>";
                 echo"</tr>";
              }
                  if($flag==0)
                    {
                      echo "Please Enter Correct Details"."<small><strong>"." no data found"."</strong></small>";
                    }
         }

function showpics($id){
    $host = 'localhost';
   $user = 'root';
   $pass = '';
   $dbname='admin';
   $conn = mysqli_connect($host, $user, $pass, $dbname);
    echo "Showing Results for ID: "."<strong>".$id."</strong>";
    echo "</br>";
    $result=mysqli_query($conn,"SELECT * FROM aadharpic WHERE vendor_id='$id'");
    $row=mysqli_fetch_array($result);
    echo "</br>";
    echo "<Strong>"."Aadhar Card"."</strong>";echo "<br>";
    echo '<img src="data:image/jpg;base64,'.base64_encode($row['aadhar']) .'" />';
    echo "</br>";
    echo "</br>";
    $result1=mysqli_query($conn,"SELECT * FROM vendorphoto WHERE vendor_id='$id'");
    $row1=mysqli_fetch_assoc($result1);
    echo "<Strong>"."Vendor Photo"."</strong>";echo "<br>";
    echo '<img src="data:image/jpg;base64,'.base64_encode( $row1['photo'] ).'"/>';
    echo "</br>";
    echo "</br>";
    $result2=mysqli_query($conn,"SELECT * FROM bankdoc WHERE vendor_id='$id'");
    $row2=mysqli_fetch_assoc($result2);
    echo "<Strong>"."Vendor bank Document"."</strong>";echo "<br>";
    echo '<img src="data:image/jpg;base64,'.base64_encode( $row2['doc'] ).'"/>';
   }
    /*
    while($row=mysqli_fetch_array($result))
    {
         echo "<tr>";
         echo "<strong>"."AADHAR Card: "."</strong>";
         echo "<td>". $row['aadhar']."</td>"; 
         echo "</br>";
         echo "</tr>";
    }*/

?>

;<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
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
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin</a> 
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
                    <li>
                        <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                      <li>
                        <a  href="ui.php"><i class="fa fa-desktop fa-3x"></i>Complete Vendor Profile</a>
                    </li>
                      <li  >
                        <a  href="table.php"><i class="fa fa-table fa-3x"></i>vendor Table</a>
                    </li>
                    <li  >
                        <a  href="form2.php"><i class="fa fa-edit fa-3x"></i> Forms </a>
                    </li>
                    <li  >
                        <a class="active-menu"  href="blank.php"><i class="fa fa-square-o fa-3x"></i> Vendor Documents</a>
                    </li>	
					                   
                   <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Admin Editor<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="message.php">Message View</a>
                            </li>
                            <li>
                                <a href="vendors.php">Vendors View</a>
                            </li>
                            
                        </ul>
                      </li>  
					  <li >
                        <a  href="home.php"><i class="fa fa-square-o fa-3x"></i> Admin Details</a>
                    </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Upload Vendor Documents</h2>   

                        <h5>Welcome Admin, Have a nice day.</h5>
                       
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
                                 <h3>Enter Vendor Detail</h3>
                                    <form role="form" action="" method="post">
                                     <div class="form-group">
                                        <label> Enter Name</label>
                                        <input class="form-control" name="fname" placeholder="Enter First Name" required/><br>
                                         <input class="form-control" name="lname" placeholder="Enter last Name" required/>
                                        </div>
    
                                    <div style="margin-top: 10px;">
                                        <label>Enter Phone number</label>
                                        <input class="form-control" name="phone" placeholder="Enter phone Number" required/><br>
                                        </div>
                                        
                                        <div>
                                          <button type="submit" name="fetchdata"  value="upload" class="btn btn-default">Submit</button>
                                        </div>
                                    
                                    </form>
                                
                                
                                </div>
                                
                                
                        <div class="col-md-6">
                            <h3>vendor data</h3>
                            <div style="margin-top: 30px;">
                                
                                    <?php
                                    if(isset($_POST['fetchdata'])){
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
                <div class="row">
                  <div class="col-md-7">
                     <div class="panel panel-default">
                      <div class="panel-heading">
                         Upload Documents Here
                        </div>
                       <div class="panel-body">
                           <div class="row">
                            <div class="col-md-6">
                               <form role="form" action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Enter Vendor ID</label>
                                    <input class="form-control" name="vendorid" placeholder="Enter Vendor ID" required/><br>
                                   <label>Upload AADHAR card picture</label>
                                    <input type="file" name="aadhar"/><br>  
                                    <button type="submit" name="submitaadhar" value="uploadaadhar" class="btn btn-success btn-sm">upload AADHAR</button><br><br>
                                    
                                    <label>Upload a passport size photograph</label>
                                    <input type="file" name="pic"/><br>
                                    <button type="submit" name="submitpic" value="uploadpic" class="btn btn-success btn-sm">upload picture</button><br><br>
                                    
                                    <label>Upload a bank related document</label>
                                    <input type="file" name="bankdoc"/><br/>
                                    <button type="submit" name="submitdoc" value="uploaddoc" class="btn btn-success btn-sm">upload picture</button><br><br>
                                   </div>
                                   
                                  
                                   <?php
                                   if(isset($_POST['submitaadhar'])){
                                       if(getimagesize($_FILES['aadhar']['tmp_name'])==FALSE)
                                        {
                                            echo " error without function call ";
                                        }
                                       else{
                                          $image = $_FILES['aadhar']['tmp_name'];
                                          $image = addslashes(file_get_contents($image));
                                         
                                          updateaadhar($image); 
                                       }  
                                  }
                                   if(isset($_POST['submitpic']))
                                   {
                                       if(getimagesize($_FILES['pic']['tmp_name'])==FALSE)
                                        {
                                            echo " error without function call ";
                                        }
                                       else{
                                          $image = $_FILES['pic']['tmp_name'];
                                          $image = addslashes(file_get_contents($image));
                                           echo "calling function"."</br>";
                                          updatepic($image); 
                                       }
                                   }
                                   if(isset($_POST['submitdoc']))
                                   {
                                       if(getimagesize($_FILES['bankdoc']['tmp_name'])==FALSE)
                                        {
                                            echo " error without function call ";
                                        }
                                       else{
                                          $image = $_FILES['bankdoc']['tmp_name'];
                                          $image = addslashes(file_get_contents($image));
                                           echo "calling function"."</br>";
                                          updatedoc($image); 
                                       }
                                   }
                                   ?>
                                 
                                </form>
                               </div>
                           </div>
                         </div>
                      </div>
                    </div>
                     <div class="col-md-5">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              Search for vendor documents
                              </div>
                            <div class="panel-body" style="margin-top: 10px;">
                               <form role="form" action="" method="post">
                                <div class="form-group">
                                   <label>Enter Vendor ID</label>
                                    <input class="form-control" name="vendoridforshow" placeholder="Enter Vendor ID" required/><br>
                                    
                                   <button type="submit" name="showpics" value="show_pics" class="btn btn-success btn-xs">show photos</button>
                                    
                                   </div>
                                </form>
                                <?php
                                  if(isset($_POST['showpics'])){
                                    $id=$_POST['vendoridforshow'];
                                    showpics($id);
                                  }
                                ?>
                               
                              </div>    
                           </div>
                    </div></div>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
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
