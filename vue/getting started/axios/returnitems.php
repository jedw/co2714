<?php
$mysqli = new mysqli("localhost", "student", "website", "mydatabase");
if ($mysqli->connect_errno){
    printf("Connection failed%s\n", $mysqli->connect_error);
    exit();
}

$query = $mysqli->query("SELECT thing, highlight FROM things2");
$listItems = array();

while ($row = $query->fetch_array()){
    array_push($listItems, $row);
}

$mysqli->close();
header("Content-type: application/json");
echo json_encode($listItems);
die();
?>