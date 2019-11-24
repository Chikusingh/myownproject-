<!DOCTYPE html>
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
        <nav class="navbar navbar-default navbar-cls-top" role="navigation" style="margin-bottom: 0">
           <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin</a>
            </div>
            <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;"> 
			<a href="vendors_view.php">To Edit Vendors Details</a>
              <a href="#" class="btn btn-danger square-btn-adjust">Log Out</a>
            </div>
           </nav>
           
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
                        <a  href="table.php"><i class="fa fa-table fa-3x"></i> vendor Table</a>
                    </li>
                    <li  >
                        <a class="active-menu"  href="form2.php"><i class="fa fa-edit fa-3x"></i> Forms </a>
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
                   <li> <a href="home.php"><i class="fa fa-square-o fa-3x"></i>Admin Details</a>
                   </li>
               </ul>
               
               
               </div>
           
           </nav>
           <div id="page-wrapper">
            <div id="page-inner">
               <div class="row">
                <div class="col-md-12">
                   <center><h2>ADD NEW VENDOR</h2></center>
                   <h5>
<?php
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
?>
                    </h5>
                   </div>
                </div>
                    
                <div class="row">
                 <div class="col-md-12">
                    <!-- form beginning -->
                     <div class="panel panel-default">
                      <div class="panel-heading">
                         ADD NEW VENDOR </div>
                    <div class="panel-body">
                         <div class="row">
                        <div class="col-md-6">
                             <h3>Basic Details Here</h3>
                              <form role="form" action="" method="post">
							  <div class="form-group">
                                <label>Enter user full name</label>
                                <input type="text" class="form-control" name="user_name" placeholder="User Name" />
                                  </div>
                              <div class="form-group">
                                  <label>Enter Name</label>
                                  <input type="text" class="form-control" name="fname" placeholder="First Name" />
                                  </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="lname" placeholder="last Name" />
                                  </div>
                            <div class="form-group">
                                <label>Phone number</label>
                                <input type="text" class="form-control" name="phone" placeholder="contact number" />
                                  </div>
                            <div class="form-group">
                                <label>Email ID</label>
                                <input type="text" class="form-control" name="email" placeholder="Email id" />
                                  </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" name="address" rows="3"></textarea>
                                  </div>
                                   <div class="form-group">
                                <label>AADHAR Number</label>
                                <input type="text" class="form-control" name="aadhar" placeholder="AADHAR number" />
                                  </div>
                            <!--<div class="form-group">
                                <label>picture</label>
                                <input type="file" name="file"/>
                                  </div>-->
                             <div class="form-group">
                                            <label>select location</label>
                                            <select class="form-control" name="location">
                                                <option>Unimall</option>
                                                <option>Hostel Mess</option>
                                                <option>Kiosk</option>
                                            </select>
                                        </div>
                                   <div class="form-group">
                                <label>Assign a NEW Vendor ID</label>
                                <input type="text" class="form-control" name="vendor_id" placeholder="Vendor ID" />
                                      <!--<button type="submit" name="generateid" class="btn btn-warning btn-xs">Suggest unique ID</button>-->
                                       <?php
                                       if(isset($_POST['generateid'])){
                                            generateid();
                                        }
                                       ?>
                                  </div>
                                  <br>
                                  <button type="submit" name="submit"  value="upload" class="btn btn-default">Submit</button>
                            </form>
                            
                             </div>
                        </div>
                         </div>
                     </div>
                    </div>
                </div>
                
               </div>
           </div>   
    </div>
    <?php
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname='admin';
        $conn = mysqli_connect($host, $user, $pass, $dbname);
    
        
    
    function generateid(){
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname='admin';
        $conn = mysqli_connect($host, $user, $pass, $dbname);
        $temp=11;
        $temp1=rand(40,70);
        $temp2=rand(10,99);
        $result=$temp.$temp1.$temp2;
        $sql=mysqli_query($conn,"SELECT id FROM vendorsdata WHERE vendor_id='$result'");
        if($result->num_rows == 0) {
            // row not found, do stuff...
            echo "<input type='text' name='box' value='$result'/>";
        } else {
                // do other stuff...
                generateid();
            }
        
    }
    
   if(isset($_POST['submit'])){
	     $user_name=$_POST['user_name'];
         $fname=$_POST['fname'];
         $lname=$_POST['lname'];
         $phone=$_POST['phone'];
         $mail=$_POST['email'];
         $aadhar=$_POST['aadhar'];
         $address=$_POST['address'];
         $location=$_POST['location'];
         $vendorid=$_POST['vendor_id'];
         
         
         //$image=$_POST['image'];
        $sql="INSERT INTO vendorsdata(user_name,vendor_id,fname, lname, phone, mail, address, location,aadhar) VALUES ('$user_name','$vendorid','$fname','$lname','$phone','$mail','$address','$location','$aadhar')";
        if(mysqli_query($conn, $sql)){
            echo "Records inserted successfully.";
        }
       else{
           echo "ERROR: query was not executed successfully. $sql. " . mysqli_error($conn);
        }
    
    }
         
    ?>
    </body></html>