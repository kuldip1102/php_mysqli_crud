<?php 
error_reporting(E_ALL);
require 'db/connect.php';

/* working code   ==== update ==== */
/*  
if ($update = $conn->query("UPDATE people SET created = NOW() where id > 1")) {
	 //  returns the values of the affected row in the databse.
	echo $rows = $conn->affected_rows;
}

*/

/*  ======delete ====== */
if ($delete = $conn->query("DELETE FROM people WHERE id = 1")) {
	 //  returns the values of the affected row in the databse.
	echo $rows = $conn->affected_rows;
}
?>
