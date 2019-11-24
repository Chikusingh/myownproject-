<html>
<head>
    </head>
    <body>
    <form method="post" action="">
    <input type="text" name="username" required />
    <input type="password" name="password" required />
    <button type="submit" name="submit" value="submit">Submit</button>
    </form>    
    </body>
</html>
<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname='phppot_examples';
$conn = mysqli_connect($host, $user, $pass, $dbname);

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
    echo"connected";
}
  
      
      //session_start();
       $username=$_POST['username'];
      $password=$_POST['password'];
      $query = mysqli_query($conn, "SELECT *  FROM login where user_name = '$username' AND password = '$password'") or die(mysqli_error($conn));
      $row = mysqli_fetch_array($query) or die(mysqli_error($conn));
      
      if(!empty($row['username']) AND !empty($row['password']))
      {
          //$_SESSION['username'] = $row['password'];
          //echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";
          header('Location:f.php');
      }
      else
      {
          echo"login failed";
      }
      



  
?>