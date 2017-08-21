<?php 
error_reporting(E_ALL);
require 'db/connect.php';

/* ==== insert ==== */
$first_name = "vipul";
$last_name = "suthar";
$bio = $conn->real_escape_string(trim("i'm 'a 'developer"));


if ($insert = $conn->query("
	INSERT INTO people(firsrt_name,last_name,bio,created)
	VALUES ('{$first_name}','{$last_name}','{$bio}',NOW())")) {

	// var_dump($conn);

	echo $rows = $conn->affected_rows;
}

?>
