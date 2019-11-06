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
	$com = $_POST['com'];	
	$stmt = $mysqli->prepare("INSERT into comments (comment) VALUES (?)");
	$stmt->bind_param('s', $com);
	$success = $stmt->execute(); 
?>