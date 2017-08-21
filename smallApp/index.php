<?php 
	error_reporting(E_ALL);
	require('../db/connect.php');
	require('security.php');

if (isset($_POST['submit'])) {
	if (isset($_POST['first_name'],$_POST['last_name'],$_POST['bio'])) {

		$first_name = escape($_POST['first_name']);
		$last_name = escape($_POST['last_name']);
		$bio = escape($_POST['bio']);

		if (!empty($first_name) && !empty($last_name) && !empty($bio)) {
			
			if ($insert = $conn->query("INSERT INTO people (firsrt_name,last_name,bio,created) VALUES ('{$first_name}','{$last_name}','{$bio}',NOW())")) {
				echo $conn->affected_rows;
			}else{
				echo "not inserted";
			}
			
		}else{
			echo "empty";
		}
		
	}else{
		echo "somting wrong";
	}
}else{

}
?>
<?php
$records = array();
	if ($results = $conn->query("SELECT * FROM people")) {
		if ($count = $results->num_rows > 0) {
			while ($row = $results->fetch_object()) {
				$records[] = $row;
			}
		}
	}
	// print_r($records); 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		h3{
			/*text-align: left;*/
			margin-left: 200px;
		}
		table{
			width: 40%;
			text-align: center;
			border: 0px solid;
		}
		div{
			padding: 5px;
		}
		#submit{
			margin-left: 50px;
		}
	</style>
</head>
<body>
	<h3>User Data</h3>
	<?php
		if (!count($records)) {
			echo "No results";
		}else{
	?>
	<table>
		<thead>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Bio</th>
				<th>Created</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach ($records as $value) {
			?>
				<tr>
					<td><?php echo $value->firsrt_name; ?></td>
					<td><?php echo $value->last_name; ?></td>
					<td><?php echo $value->bio; ?></td>
					<td><?php echo $value->created; ?></td>
				</tr>
			<?php		
				}
			?>
		</tbody>
	</table>
	<?php
	}
	?>
	<hr>

	<form action="index.php" method="post">
		<div>
			<label>First Name: </label>
			<input type="text" name="first_name" >
		</div>

		<div>
			<label>Last Name: </label>
			<input type="text" name="last_name" >
		</div>
		<div>
			<label>Bio: </label>
			<textarea name="bio"></textarea>
		</div>
		<div id="submit">
			<input type="submit" name="submit" value="submit">
		</div>
	</form>
</body>
</html>