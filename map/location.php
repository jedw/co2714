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

$sql = "SELECT team, lat, lon FROM coords";
$result = $mysqli->query ($sql);

$rows = array();

while($row = $result->fetch_assoc()){
	array_push($rows, $row);
}

header("Content-type: application/json");
echo json_encode($rows);

?>