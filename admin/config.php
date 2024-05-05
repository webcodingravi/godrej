<?php

$header = "http://localhost/godrej/admin/";   

// Defines database credentials
$server = 'localhost';
$username   = 'root';
$password   = '';
$database   = 'new_web_db';
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect($server, $username,  $password, $database);
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}







?>