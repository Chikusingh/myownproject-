<?php
include("Dbconnection.php");
// sql to create table
$sql = "CREATE TABLE users 
(
   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
   first_name VARCHAR(50) NOT NULL,
   last_name VARCHAR(50) NOT NULL,
   email VARCHAR(100) NOT NULL,
   password VARCHAR(100) NOT NULL,
   
)";

if ($conn->query($sql) === TRUE) 
{
    echo "Table users created successfully";
} 
else 
{
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
