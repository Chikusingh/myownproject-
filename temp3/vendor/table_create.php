<?php
require("db.php");
// sql to create table
$sql = "CREATE TABLE login 
(
   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
   email VARCHAR(30),
   password VARCHAR(50)
)";

if ($con->query($sql) === TRUE) 
{
    echo "Table menu created successfully";
} 
else 
{
    echo "Error creating table: " . $con->error;
}

$con->close();
?>
