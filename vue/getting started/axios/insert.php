<?php

$data = json_decode(file_get_contents('php://input'), TRUE);
$mysqli = new mysqli("localhost", "student", "website", "mydatabase");
if ($mysqli->connect_errno){
    printf("Connection failed%s\n", $mysqli->connect_error);
    exit();
}
$stmt=$mysqli->prepare("INSERT INTO things2 (thing, highlight) VALUES (?,?)");

$stmt->bind_param('ss', $data['new'], $data['highlight']);
$success = $stmt->execute(); 
	
$stmt->close();
$mysqli->close();
die();
?>