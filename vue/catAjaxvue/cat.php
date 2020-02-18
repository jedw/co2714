<?php
$conn = new mysqli("localhost", "student", "website", "mydatabase");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select cat from cats";
$query = $conn->query($sql);
$cats = array();

while($row = $query->fetch_array()){
	array_push($cats, $row[0]);
}


$conn->close();

header("Content-type: application/json");
echo json_encode($cats);
die();
