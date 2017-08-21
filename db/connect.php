<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "app";
global $conn;
$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
// * show the error no	
	// echo $conn->connect_errno;

if ($conn->connect_errno) {
	echo $conn->connect_error;
	// die("There were some error");
}

?>