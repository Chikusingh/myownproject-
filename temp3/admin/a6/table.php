<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="index.php">HOME</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="../index1.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                        <a  href="ui.php"><i class="fa fa-desktop fa-3x"></i> Complete Vendor Profile</a>
                    </li>
                   <!-- <li>
                        <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
                    </li>
						   <li  >
                        <a  href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
                    </li>	-->
                      <li  >
                        <a class="active-menu"  href="table.php"><i class="fa fa-table fa-3x"></i> vendor Details</a>
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
                  <li  >
                        <a   href="home.php"><i class="fa fa-square-o fa-3x"></i> Admin Details</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <center><h2>Vendors Table</h2></center>   
                        <center><h5>Welcome Admin </h5></center>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Vendor list Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <?php
                                     $host = 'localhost';
                                        $user = 'root';
                                         $pass = '';
                                         $dbname='admin';
                                          $conn = mysqli_connect($host, $user, $pass, $dbname);
                                            if(! $conn ) {
                                               die('Could not connect: '.mysqli_error());
                                              }
                                             echo "<strong>".'Database Connected successfully'."</strong>"."</br></br>";
                                            ?>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        
                                        <tr>
										    <th>VendorId</th>
                                            <th>First Name</th>
                                            <th>last Name</th>
                                            <th>Phone</th>
                                            <th>Location</th>
                                            <th>Address</th>
											<th>Rent</th>
											<th>AadharNumber</th>
                                            
                                            <?php
                                            $host = 'localhost';
                                           $user = 'root';
                                           $pass = '';
                                           $dbname='admin';
                                            $conn = mysqli_connect($host, $user, $pass, $dbname);
                                            $result = mysqli_query($conn,"SELECT * FROM vendorsdata");
                                            while ($row = mysqli_fetch_array($result)) {
                                              echo "<tr>";
											  echo "<td>" . $row['vendor_id'] . "</td>";
                                              echo "<td>" . $row['fname'] . "</td>";
                                              echo "<td>" . $row['lname'] . "</td>";
                                              echo "<td>" . $row['phone'] . "</td>";
                                            echo "<td>" . $row['location'] . "</td>";
                                            echo "<td>" . $row['address'] . "</td>";
											echo "<td>" . $row['rent'] . "</td>";
                                            echo "<td>" . $row['aadhar'] . "</td>";
                                              echo '</tr>';
                                            }
                                            ?>
                                            
                                        </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-6">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kitchen Sink
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>VendorId</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                            $host = 'localhost';
                                           $user = 'root';
                                           $pass = '';
                                           $dbname='admin';
                                            $conn = mysqli_connect($host, $user, $pass, $dbname);
                                            $result = mysqli_query($conn,"SELECT * FROM vendorsdata");
                                            while ($row = mysqli_fetch_array($result)) {
                                              echo "<tr>";
											  echo "<td>" . $row['vendor_id'] . "</td>";
                                              echo "<td>" . $row['fname'] . "</td>";
                                              echo "<td>" . $row['lname'] . "</td>";
                                              
                                              echo '</tr>';
                                            }
                                            ?>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
                <div class="col-md-6">
                     <!--   Basic Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Table
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>phone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                            $host = 'localhost';
                                           $user = 'root';
                                           $pass = '';
                                           $dbname='admin';
                                            $conn = mysqli_connect($host, $user, $pass, $dbname);
                                            $result = mysqli_query($conn,"SELECT * FROM vendorsdata");
                                            while ($row = mysqli_fetch_array($result)) {
                                              echo "<tr>";
                                              echo "<td>" . $row['fname'] . "</td>";
                                              echo "<td>" . $row['lname'] . "</td>";
                                              echo "<td>" . $row['phone'] . "</td>";
                                              echo '</tr>';
                                            }
                                            ?>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  -->
                </div>
            </div>
                <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-6">
                      <!--    Striped Rows Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Striped Rows Table
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            
                                            <th>phone</th>
                                            <th>location</th>
                                            <th>address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                            $host = 'localhost';
                                           $user = 'root';
                                           $pass = '';
                                           $dbname='admin';
                                            $conn = mysqli_connect($host, $user, $pass, $dbname);
                                            $result = mysqli_query($conn,"SELECT * FROM vendorsdata");
                                            while ($row = mysqli_fetch_array($result)) {
                                              echo "<tr>";
                                              echo "<td>" . $row['phone'] . "</td>";
                                              echo "<td>" . $row['location'] . "</td>";
                                              echo "<td>" . $row['address'] . "</td>";
                                              echo '</tr>';
                                            }
                                            ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  End  Striped Rows Table  -->
                </div>
                <div class="col-md-6">
                    <!--    Bordered Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Bordered Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                        <tr>
                                           
                                            <th>firstname</th>
                                            <th>address</th>
                                            <th>rent</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                            $host = 'localhost';
                                           $user = 'root';
                                           $pass = '';
                                           $dbname='admin';
                                            $conn = mysqli_connect($host, $user, $pass, $dbname);
                                            $result = mysqli_query($conn,"SELECT * FROM vendorsdata");
                                            while ($row = mysqli_fetch_array($result)) {
                                              echo "<tr>";
                                              echo "<td>" . $row['fname'] . "</td>";
                                              echo "<td>" . $row['address'] . "</td>";
                                              echo "<td>" . $row['rent'] . "</td>";
                                              echo '</tr>';
                                            }
                                            ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!--  End  Bordered Table  -->
                </div>
            </div>
                <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-6">
                     <!--    Hover Rows  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Hover Rows
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>AadharNumber</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                            $host = 'localhost';
                                           $user = 'root';
                                           $pass = '';
                                           $dbname='admin';
                                            $conn = mysqli_connect($host, $user, $pass, $dbname);
                                            $result = mysqli_query($conn,"SELECT * FROM vendorsdata");
                                            while ($row = mysqli_fetch_array($result)) {
                                              echo "<tr>";
                                              echo "<td>" . $row['fname'] . "</td>";
                                              echo "<td>" . $row['lname'] . "</td>";
                                              echo "<td>" . $row['aadhar'] . "</td>";
                                              echo '</tr>';
                                            }
                                            ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End  Hover Rows  -->
                </div>
                <div class="col-md-6">
                     <!--    Context Classes  -->
                    <div class="panel panel-default">
                       
                        <div class="panel-heading">
                            Context Classes
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>phone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="success">
                                           <?php
                                            $host = 'localhost';
                                           $user = 'root';
                                           $pass = '';
                                           $dbname='admin';
                                            $conn = mysqli_connect($host, $user, $pass, $dbname);
                                            $result = mysqli_query($conn,"SELECT * FROM vendorsdata");
                                            while ($row = mysqli_fetch_array($result)) {
                                              echo "<tr>";
                                              echo "<td>" . $row['fname'] . "</td>";
                                              echo "<td>" . $row['lname'] . "</td>";
                                              echo "<td>" . $row['phone'] . "</td>";
                                              echo '</tr>';
                                            }
                                            ?>
                                        
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  end  Context Classes  -->
                </div>
            </div>
                <!-- /. ROW  -->
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
