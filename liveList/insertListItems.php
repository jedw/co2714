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
	$listItem = $_POST['li'];	
	$stmt = $mysqli->prepare("INSERT into things (thing) VALUES (?)");
	$stmt->bind_param('s', $listItem);
	$success = $stmt->execute(); 
	
	$stmt->close();
	$mysqli->close();
?>
