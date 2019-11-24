<?php
 function connection(){
     $host = 'localhost';
     $user = 'root';
     $pass = '';
     $dbname='admin';
     $conn = mysqli_connect($host, $user, $pass, $dbname);
     if(! $conn ) {
        die('error: '.mysqli_error($conn));
         }
         echo 'Database up and Running';
 }  
function fetchVendorData(){
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname='admin';
    $conn = mysqli_connect($host, $user, $pass, $dbname);
    $flag=0;
    $fname=$_POST['fname'];
    $phone=$_POST['phone'];
    
    $check=mysqli_query($conn,"SELECT * FROM vendorsdata WHERE phone='$phone' AND fname='$fname'");
        while($row=mysqli_fetch_array($check)){
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
    if($flag==0){
        echo"<h2>"."Incorrect Details"."</h2>";
    }
}
function fetchVendorDatawithid(){
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname='admin';
    $conn = mysqli_connect($host, $user, $pass, $dbname);
    
    $flag=0;
    $id=$_POST['vendorid'];
    
    $check=mysqli_query($conn,"SELECT * FROM vendorsdata WHERE vendor_id='$id'");
        while($row=mysqli_fetch_array($check)){
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
    if($flag==0){
        echo"<h2>"."Incorrect Details"."</h2>";
    }
}
function sendmsg(){
    $host = 'localhost';
     $user = 'root';
     $pass = '';
     $dbname='admin';
     $conn = mysqli_connect($host, $user, $pass, $dbname);
    $id=$_POST['id'];
    $sub=$_POST['sub'];
    $msg=$_POST['msg'];
    date_default_timezone_set('Asia/Kolkata');
    $date=date('Y-m-d');
  
    
    $check=mysqli_query($conn,"SELECT * FROM vendorsdata WHERE vendor_id='$id'");
    $row=mysqli_fetch_array($check);
    if($row>0){
        $sql=mysqli_query($conn,"INSERT INTO vendor_message(vendor_id, subject, date, msg) VALUES ('$id', '$sub', '$date', '$msg' )");
        if(!$sql){
                die("insertion error..".mysqli_error($conn));
                }
        else{
            echo "<br>";
            echo "<label class='alert alert-info'>"." Message Sent successfully"."</label>";
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
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>send message</title>
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
         <a class="navbar-brand" href="index.php">HOME</a>
         </div>
         <div style="padding: 15px 50px 5px 50px;float: right;"><a href="index.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
       </nav>   
        <!-- /. NAV TOP  -->
       
       <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
          <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="assets/img/find_user.png" class="user-image img-responsive"/>
            </li>
            <li>
                <a href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
            </li>
            <li>
                <a href="ui.php"><i class="fa fa-desktop fa-3x"></i> Complete Vendor Profile</a>
            </li>
            <li  >
                <a href="table.php"><i class="fa fa-table fa-3x"></i> Vendor Tables</a>
            </li>
            <li>
                <a href="form2.php"><i class="fa fa-edit fa-3x"></i> Forms </a>
            </li>
            <li>
                <a href="blank.php"><i class="fa fa-square-o fa-3x"></i>Vendor Documents</a>
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
              
                           
                            
                
            </ul>
           </div>
       </nav>
       <!-- /. NAV SIDE  -->
       <div id="page-wrapper">
        <div id="page-inner">
          <div class="row">
            <div class="col-md-12">
              <h2> Send message to any vendor here</h2>
              <h5>welcome Admin, write a message to any vendor.</h5>
              <h5><?php connection() ?></h5> 
              </div>
            </div> 
           <!-- /. ROW  -->
           <hr/>
            
          <div class="row">
            <div class="col-md-12">
              <!--  Form beginning  -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  View Vendor profile
                  </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-6">
                      <h3>Enter vendor details to search</h3>
                      <form role="form" action="" method="post">
                       <div class="form-group">
                          <label> Enter Vendor ID</label>
                          <input class="form-control" name="vendorid" placeholder="Enter Vendor ID"/><br>
                           <button type="submit" name="submitid" value="submitid" class="btn btn-info">Submit</button>
                           <div style="margin-top:10px;">
                            <label> Enter First Name</label>
                          <input class="form-control" name="fname" placeholder="Enter vendor name"/><br>
                          <label>Eneter Phone number</label>
                          <input class="form-control" name="phone" placeholder="Enter Phone Number"/><br>
                           <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                           
                           </div>
                          </div> 
                        
                        </form>
                      </div>
                      
                    <div class="col-md-6">
                      <h3>Vendor Data</h3>
                      <div style="margin-top: 30px;">
                        <?php
                         if(isset($_POST['submit'])){
                            fetchVendorData();
                            }
                          if(isset($_POST['submitid'])){
                            fetchVendorDatawithid();
                            }
                            ?>    
                            </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            
            </div>
            <!-- /.ROW -->
            <div class="row">
             <div class="col-md-6">
              <div class="panel panel-default">
                 <div class="panel-heading">
                   Send private message to any vendor here
                </div>
                  <div class="panel-body">
                   <div class="form-group">
                    <form role="form" action="" method="post">
                      <label> Enter Vendor ID</label>
                       <input class="form-control" name="id" placeholder="Enter Vendor ID" required/><br><br/>
                        
                        <label> Enter subject</label>
                       <input class="form-control" name="sub" placeholder="Enter subject for message" required/><br>
                        
                        <label> Enter the message</label>
                       <textarea class="form-control" name="msg" rows="4" required></textarea><br>
                        
                        <button type="submit" name="sendmsg" value="sendmsg" class="btn btn-success btn-lg">Send Message</button>
                       </form>
                      </div>
                      <?php
                       if(isset($_POST['sendmsg'])){
                            sendmsg();
                        }
                      ?>
                  </div>
                 </div>
                </div>
            </div>
           </div>
       </div>
    </div> 
    </body>
</html>