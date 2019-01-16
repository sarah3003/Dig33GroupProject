<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Database connection information
$host = "localhost";
// Temporary username/password. I'll make a proper account when I'm done testing
$username = "";
$password = "";
$database = "feel_good_drinks";

$connection = mysqli_connect($host, $username, $password, $database);

// Test mysql connection
if(mysqli_connect_errno()){
    die("Could not connect to the database: ". mysqli_connect_error());
}


?>