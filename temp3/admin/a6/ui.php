<?php
  global $var1, $var2, $var3; $count;
  
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
              $result=mysqli_query($conn,"SELECT * FROM vendorsdata WHERE phone='$phone' AND fname='$fname'");
              while($row=mysqli_fetch_array($result))
               {
                 $flag=1;
                 echo "<tr>";
                 echo "<strong>"."VendorId: "."</strong>";
                 echo "<td>". $row['vendor_id'] . "</td>"; echo "</br>";
                  
                 echo "<strong>"."Name: "."</strong>";
                 echo "<td>". $row['user_name'] . "</td>"; echo "</br>";
                
                 echo "<strong>"."Phone: "."</strong>";
                 echo "<td>" . $row['phone'] . "</td>";echo "</br>";
                  
                 echo "<strong>"."Email: "."</strong>";
                 echo "<td>" . $row['mail'] . "</td>";echo "</br>";
                 
                 echo "<strong>"."Location: "."</strong>";
                 echo "<td>" . $row['location'] . "</td>";echo "</br>";
                 echo "<strong>"."Rent: "."</strong>";
                 echo "<td>". $row['rent'] . "</td>"; echo "</br>";
				 
				 echo "<strong>"."VendorAddress: "."</strong>";
                 echo "<td>" . $row['address'] . "</td>";echo "</br>";
				 
				 echo "<strong>"."AadharNumber: "."</strong>";
                 echo "<td>" . $row['aadhar'] . "</td>";echo "</br>";
                  
                 echo "<strong>"."Approval Duration: "."</strong>";
                 echo "<td>". $row['approvalTime'] . " Months"."</td>"; echo "</br>";
                 echo"</tr>";
                 $var1=$phone;
                 $var2=$fname;
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
function updateProfile(){
                $phone=$_POST['phone'];
                //echo "this is ".$phone;echo"<br>";
                $rent=$_POST['rent'];
                $id=$_POST['vendorid'];
                $approval=$_POST['approval'];
				$temp=rand(10000,99999);
                                       
                $host = 'localhost';
                $user = 'root';
                $pass = '';
                $dbname='admin';
                $conn = mysqli_connect($host, $user, $pass, $dbname);
    
               if($phone>0){
                   $search=mysqli_query($conn,"SELECT * FROM vendorsdata WHERE vendor_id='$id'");
                   $row=mysqli_fetch_array($search);
                   if($row>0){
                   $sql=mysqli_query($conn,"UPDATE vendorsdata SET phone='$phone', rent='$rent',approvalTime='$approval',password='$temp' WHERE vendor_id='$id'");
                    if(!$sql){
                          die("insertion error..".mysqli_error($conn));
                      }
                    else{
                        echo "<br>";
                        echo "<label class='alert alert-info'>"." Data updated: Phone, Rent and Approval time."."</label>";
                       }    
                      } 
                    else{
                        echo "<br>";echo"<br>";
                        echo"<h2>"."<Strong>"."Inorrect Vendor Id"."</strong>"."</h2>"; 
                        echo"<br>";
                        echo"There is no record associated with this vendor id.";
                    } 
               }
                else{
                    $query=mysqli_query($conn,"SELECT * FROM vendorsdata WHERE vendor_id='$id'");
                    $rowvar=mysqli_fetch_array($query);
                    if($rowvar>0){
                        $sql=mysqli_query($conn,"UPDATE vendorsdata SET rent='$rent',approvalTime='$approval' WHERE vendor_id='$id'");
                        if(!$sql){
                          die("insertion error..".mysqli_error($conn));
                        }
                        else{
                            echo "<br>";
                            echo "<label class='alert alert-info'>"." Data updated: Rent and Approval time."."</label>";
                       }
                    }
                     else{
                        echo "<br>";echo"<br>";
                        echo"<h2>"."<Strong>"."Inorrect Vendor Id"."</strong>"."</h2>"; 
                        echo"<br>";
                        echo"There is no record associated with this vendor id.";
                    } 
                }                 
 }
 function updateProfile2(){
    $id=$_POST['vendorId'];
    $mail=$_POST['mail'];
    $aadhar=$_POST['aadhar'];
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname='admin';
    $conn = mysqli_connect($host, $user, $pass, $dbname);
    echo $id;
    echo $mail;
    echo $aadhar;
    
    $sql=mysqli_query($conn,"SELECT * FROM vendorsdata WHERE vendor_id='$id'");
    $row=mysqli_fetch_array($sql);
    if($row>0){
        $query=mysqli_query($conn,"UPDATE vendorsdata SET mail='$mail',aadhar='$aadhar' WHERE vendor_id='$id'");
        if(!$query){
                  die("updation error..".mysqli_error($conn));
                }
        else{
            echo "<br>";
            echo "<label class='alert alert-info'>"." Data updated: Email and Aadhar number."."</label>";
            } 
    }
    else{
         echo "<br>";echo"<br>";
         echo"<h2>"."<Strong>"."Inorrect Vendor Id"."</strong>"."</h2>"; 
         echo"<br>";
         echo"There is no record associated with this vendor id.";
    }
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
                <a class="navbar-brand" href="index.php">Admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right; 
font-size: 16px;"> <a href="../index1.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                        <a class="active-menu"   href="ui.php"><i class="fa fa-desktop fa-3x"></i>VendorsData</a>
                    </li>
                    
                    <li  >
                        <a  href="forms.php"><i class="fa fa-edit fa-3x"></i> Forms </a>
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
                      </li>  
                  <li  >
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
                     <center><h2>Advance Forms</h2></center>   
                        <center><h5>Welcome Admin, complete the vendor profile here.</h5></center>
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
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Complete Vendor Profile Here
                        </div>
                       
                        <div class="panel-body">
                             <br />
                             <div class="form-group">
                               <form role="form" action="" method="post">
                                   <label>Enter vendor id</label><br/>
                                   <input class="form-control" name="vendorid" placeholder="Enter vendor ID" required/><br>
                                   <label> Allocate Rent/Month</label>
                                        <select class="form-control" name="rent">
                                            
                                         <option>10000</option>
                                            <option>10000</option>
                                            <option>15000</option>
                                            <option>20000</option>
                                            <option>25000</option>
                                            <option>30000</option>
                                            <option>35000</option>
                                            <option>40000</option>
                                            <option>45000</option>
                                            <option>50000</option>
                                            <option>55000</option>
                                            <option>60000</option>
                                            <option>65000</option>
                                            <option>70000</option>
                                            <option>75000</option>
                                            <option>80000</option>
                                   </select><br/>
                                      
                                     <label>Enter New phone number</label>
                                     <label><small></small></label>
                                     <input class="form-control" name="phone" placeholder="New Phone Number"/><br>
                                  <br/>
                                 <label>Vendor shop approval time<small>(in months)</small></label>
                                    <select class="form-control" name="approval">
                                            
                                         <option>Three</option>
                                            <option>Six</option>
                                            <option>Nine</option>
                                            <option>Twelve</option>
                                   </select><br/>
								   
                                   <button class="btn btn-primary" type="submit" name="update"><i class="fa fa-edit "></i>Update</button>
                                 </form>
                                  <?php
                                 if(isset($_POST['update'])){
                                      updateProfile();
                                  }
                                 ?>
                            </div>
                        </div>
                        
                    </div>
                    </div>
					<div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Update vendor data 
                        </div>
                       
                        <div class="panel-body">
                            <small>Only Enter the data you wish to update</small>
                            <br /><br />
                            <form role="form" action="" method="post">
                             <label>Enter vendor id</label><br/>
                             <input class="form-control" name="vendorId" placeholder="Enter vendor ID" required/><br>
                                
                             <label>Enter new Email</label>
                             <input class="form-control" type="email" name="mail" placeholder="Enter new Email" required/><br>
                                
                             <label>Enter update Aadhar number</label>
                             <input class="form-control" type="text" name="aadhar" placeholder="Enter new aadhar" /><br>
                            
                             <button class="btn btn-primary" type="submit" name="update2"><i class="fa fa-edit "></i>Update data</button>
                            </form>
                            <?php
                                 if(isset($_POST['update2'])){
                                      updateProfile2();
                                  }
                                 ?>
                        </div>
                    </div>
                    </div>
                </div>
                 <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Simple Progress Bars 
                        </div>
                       
                        <div class="panel-body">
                       <div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
    <span class="sr-only">40% Complete (success)</span>
  </div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
    <span class="sr-only">20% Complete</span>
  </div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
    <span class="sr-only">60% Complete (warning)</span>
  </div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
    <span class="sr-only">80% Complete</span>
  </div>
</div>
                            </div>
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Stripped Progress Bars 
                        </div>
                       
                        <div class="panel-body">
                       <div class="progress progress-striped">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
    <span class="sr-only">40% Complete (success)</span>
  </div>
</div>
<div class="progress progress-striped">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
    <span class="sr-only">20% Complete</span>
  </div>
</div>
<div class="progress progress-striped">
  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
    <span class="sr-only">60% Complete (warning)</span>
  </div>
</div>
<div class="progress progress-striped">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
    <span class="sr-only">80% Complete</span>
  </div>
</div>
                            </div>
                            </div>
                    </div>
                </div>
                 <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Animated Progress Bars 
                        </div>
                       
                        <div class="panel-body">
                       <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
    <span class="sr-only">40% Complete (success)</span>
  </div>
</div>
                            </div>
                            </div>
                    </div>
                      <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Stacked Progress Bars 
                        </div>
                       
                        <div class="panel-body">
                       <div class="progress">
  <div class="progress-bar progress-bar-success" style="width: 35%">
    <span class="sr-only">35% Complete (success)</span>
  </div>
  <div class="progress-bar progress-bar-warning" style="width: 20%">
    <span class="sr-only">20% Complete (warning)</span>
  </div>
  <div class="progress-bar progress-bar-danger" style="width: 10%">
    <span class="sr-only">10% Complete (danger)</span>
  </div>
</div>
                            </div>
                            </div>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-6">
                       
                     <!--  Modals-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Modals Example
                        </div>
                        <div class="panel-body">
                            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                              Click  Launch Demo Modal
                            </button>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Modal title Here</h4>
                                        </div>
                                        <div class="modal-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Modals-->
                
                    </div>
                     <div class="col-md-6">
                          <div class="panel panel-default">
                        <div class="panel-heading">
                            Alerts Examples
                        </div>
                        <div class="panel-body">
                            <h5><strong>Simple Alert</strong></h5>
                            <div class="alert alert-info">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
                            </div>
                            Info: You can use other classes like <i>alert-success</i> , <i>alert-warning</i> & <i>alert-danger</i> instead of <i>alert-info</i>
                           <br />
                              <h5><strong>Dismissable Alert</strong></h5>
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
                            </div>
                            Info: You can use other classes like <i>alert-success</i> , <i>alert-warning</i> & <i>alert-danger</i> instead of <i>alert-info</i>
                           
                             </div>
                              </div>
                     </div>
                </div>
                <!-- /. ROW  -->
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
