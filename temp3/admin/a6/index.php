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
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
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
font-size: 16px;"> <!--Last access : 30 May 2014--> &nbsp; <a href="../index1.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a  href="ui.php"><i class="fa fa-desktop fa-3x"></i>Complete Vendor Profile</a>
                    </li>
                    <!--<li>
                        <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
                    </li>
						   <li  >
                        <a   href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
                    </li>-->	
                      <li  >
                        <a  href="table.php"><i class="fa fa-table fa-3x"></i>Vendor Tables</a>
                    </li>
                    <li>
                        <a  href="forms.php"><i class="fa fa-edit fa-3x"></i> Forms </a>
                    </li>				
					
					                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Admin Editor<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="message.php">Message View</a>
                            </li>
                          
							<li>
                                <a href="vendors.php">Delete Vendor</a>
                            </li>
							<li>
                                <a href="sendmsg.php">Send Message</a>
                            </li>
                            
                        </ul>
                      </li>  
					  <li  >
                        <a  href="blank.php"><i class="fa fa-square-o fa-3x"></i>Vendor Documents</a>
                    </li>
                  <li >
                        <a  href="../home.php"><i class="fa fa-square-o fa-3x"></i> Admin Details</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <center><h2>Admin Dashboard</h2></center>   
                        <center><h5>Welcome Admin,How Are You! </h5></center>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-envelope-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">120 New</p>
                    <p class="text-muted">Messages</p>
					 
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Vendors Added</p>
                    <p class="text-muted">
                        <?php
                          totalrows();
                        ?>
                                               </p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">240 New</p>
                    <p class="text-muted">Notifications</p>
					<p class="text-muted">
                        <?php
                          totalrows();
                        ?>
                                               </p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">ALL LINKS</p>
                    <p class="text-muted"><?php
         $host = 'localhost';
         $user = 'root';
         $pass = '';
         $dbname='admin';
         $conn = mysqli_connect($host, $user, $pass, $dbname);
         
         if(! $conn ) {
            die('error: ' . mysqli_error());
         }
         echo 'Connected';
         mysqli_close($conn);
      ?></p>
                </div>
             </div>
		     </div>
			</div>
                 <!-- /. ROW  -->
                <hr />                
                <div class="row">
                    
                    <div class="col-md-9 col-sm-12 col-xs-0">  
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           <span class="icon-box bg-color-blue">
                    <i class="fa fa-textwarninghere"></i><label><center><strong>Recently added vendors</strong></center></label>
                </span>
                        </div>
                        <div class="panel-body">
                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
										    <th>User Name</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Phone</th>
                                            <th>vendor ID</th>
                                             <th>locatiom</th>
                                        </tr>
                                        <?php
                                           $host = 'localhost';
                                           $user = 'root';
                                           $pass = '';
                                           $dbname='admin';
                                            $conn = mysqli_connect($host, $user, $pass, $dbname);
                                            $result = mysqli_query($conn,"SELECT * FROM vendorsdata");
                                            while ($row = mysqli_fetch_array($result)) {
                                              echo "<tr>";
											  echo "<td>" . $row['user_name'] . "</td>";
                                              echo "<td>" . $row['fname'] . "</td>";
                                              echo "<td>" . $row['lname'] . "</td>";
                                              echo "<td>" . $row['phone'] . "</td>";
                                            echo "<td>" . $row['mail'] . "</td>";
                                            echo "<td>" . $row['location'] . "</td>";
                                              echo '</tr>';
                                            }
                                            ?>
                                    </thead>
                                </table>
                            </div>
                            </div>
                        </div></div>
                        
        </div>
                 <!-- /. ROW  -->
                <div class="row"> 
                    
                      
                               <div class="col-md-9 col-sm-12 col-xs-12">                     
                    <!--<div class="panel panel-default">
                        <div class="panel-heading">
                            Bar Chart Example
                        </div>
                        <div class="panel-body">
                            <div id="morris-bar-chart"></div>
                        </div>
                    </div> --> <div class="panel panel-default">
                    <div class="panel panel-default">
                   
                    <div class="chat-panel panel panel-default chat-boder chat-panel-head" >
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i>
                            Announcement Box
                                   <div class="panel-body">
                            <ul class="chat-box">
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="assets/img/1.png" alt="User" class="img-circle" />
                                    </span>
                                    <div class="chat-body">
                                        
                                        <?php
                                        for($id=1000;$id>1;$id--)
										{
											fetchmsg($id);
										}
                                        ?>
                                    </div>
									
                        
                                </li>
                                
                                    <div class="chat-body clearfix">
                                        
                                            <small class=" text-muted">
                                                
                                            <strong class="pull-right">Nilima kumari</strong>
                                      
                                         <?php
                                        //fetchmsg(14);
                                        ?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                                   
                </div>
                        </div></div></div></div></div>
            </div></div>
                                   
                 <!-- /. ROW  -->
                <!--<div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                   
                    <div class="chat-panel panel panel-default chat-boder chat-panel-head" >
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i>
                            Chat Box
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-refresh fa-fw"></i>Refresh
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-check-circle fa-fw"></i>Available
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-times fa-fw"></i>Busy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-clock-o fa-fw"></i>Away
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-sign-out fa-fw"></i>Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        -->
                        <?php
                          function fetchmsg($id){ //fetching messages or announcements from database. call this function with msgIndex
                              $host = 'localhost';
                                        $user = 'root';
                                         $pass = '';
                                         $dbname='admin';
                                        $flag=0;
                
                                        $conn = mysqli_connect($host, $user, $pass, $dbname);
                                        $result = mysqli_query($conn,"SELECT * FROM messages WHERE id=$id");
                                                while ($row = mysqli_fetch_array($result)) {
                                               echo "<tr>";
                                               
                                              echo "<td>".'<font color="blue">'.$row['heading'] .'</font>'."</td>"."</br>";
											  echo "<td>" . $row['date'] ."</td>".str_repeat('&nbsp;', 4)."</br>";  
                                              echo "<td>" . $row['message'] . "</td>";
                                              echo "<tr>";
                                            echo"</br>"."</br>";
                                                
                                                    $flag++;
                                                    if($flag == 1){
                                                        break;
                                                    }
                                                    $id++;
                                                }
												}
												function totalrows(){
                               $host = 'localhost';
                                $user = 'root';
                                $pass = '';
                                $dbname='admin';
                
                             $conn = mysqli_connect($host, $user, $pass, $dbname);
                             $sql=mysqli_query($conn,"SELECT COUNT(*) as num_rows FROM vendorsdata");
                             $row = mysqli_fetch_object( $sql );
                             $total = $row->num_rows;
                             echo "<strong>".$total."</strong>";
                             echo" ";
                         
                          }
						  
                        ?>
                        
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
	
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
    </div>
</body>
</html>
