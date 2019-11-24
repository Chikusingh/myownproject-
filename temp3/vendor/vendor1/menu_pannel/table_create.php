<?php
require("db.php");
// sql to create table
$sql = "CREATE TABLE menu 
(
   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
   menu_name VARCHAR(30),
   image VARCHAR(50),
   price int(5)   
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
