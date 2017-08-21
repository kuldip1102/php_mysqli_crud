<?php 
error_reporting(E_ALL);
require 'db/connect.php';

if ($result = $conn->query("SELECT * FROM people")) {
	if ($count = $result->num_rows > 0) {
	 	while ($rows = $result->fetch_assoc()) {
	 		// print_r($rows);
	 		echo $rows['firsrt_name']." ".$rows['last_name']."<br>";
	 	}
	}
}
// print_r($result);
// echo "success";
?>
