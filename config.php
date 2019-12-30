<?php
//$_SESSION["id"] = $id;

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */\
session_start();
$dbServerName = "localhost";
	$dbUserName = "root";
	$dbPassword = "";
	$dbName = "super";
/* Attempt to connect to MySQL database */
$link = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);
//$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>