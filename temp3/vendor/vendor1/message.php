
<html>

<body>
<div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <!--Last access : 30 May 2014--> &nbsp; <a href="index.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav> 
<center><h1>Announcement Page</h1></center>
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
    
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<style>
body
{
	background-image: url("3.jpg");
	background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
	min-height: 550px;
}
h1
{
color:#ffffff; text-decoration:none;	
}
.blinking{
    animation:blinkingText 0.8s infinite;
	background-color: red; 
}
@keyframes blinkingText{
    0%{     color: white;    }
    100%{    color: transparent; }
    150%{    color: transparent; }
   200%{    color:transparent;  }
    250%{   color: white;    }
}
</style>
                    
                      
                               <center><div class="col-md-9 col-sm-12 col-xs-12" ></center>                    
                    <!--<div class="panel panel-default">
                        <div class="panel-heading">
                            Bar Chart Example
                        </div>
                        <div class="panel-body">
                            <div id="morris-bar-chart"></div>
                        </div>
                    </div> --> <div class="panel panel-default">
                    <center><div class="panel panel-default"></center>
                   
                    <div class="chat-panel panel panel-default chat-boder chat-panel-head" >
                        <div class="panel-heading">
                            
                            
                                   <div class="panel-body">
                            <ul class="chat-box">
                                
                                    <span class="chat-img pull-left">
									
									
                                        <a href="" class="text-none"><strong><span class="blinking">new</span></strong></a> 

									

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
                               
                                </li>
                            </ul>
                        </div>
                                   
                </div>
                        </div></div></div></div></div>
            </div></div>
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
                        