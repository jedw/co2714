<?php
	$servername = "localhost";
	$username = "student";
	$password = "website";
	$dbasename = "mydatabase";
	// Create connection
	$mysqli = new mysqli($servername, $username, $password, $dbasename);
	// Check connection
	if ($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}
	
	$query = $mysqli->query("SELECT * FROM things");
	
	$listItems = array();

	while($row = $query->fetch_array()){
		array_push($listItems, $row);
	}
	
	$mysqli->close();

	header("Content-type: application/json");
	echo json_encode($listItems);
	die();
?>
