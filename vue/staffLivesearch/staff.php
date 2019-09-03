<?php
$conn = new mysqli("localhost", "student", "website", "mydatabase");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(!isset($_POST['search']))
{
	$sql = "select firstname, lastname from members ORDER BY lastname ASC";
}
else
{
	$search = $_POST['search'];
	$sql = "select firstname, lastname from members where firstname like '%$search%' or lastname like '%$search%' ORDER BY lastname ASC";
}
$query = $conn->query($sql);
$cats = array();

while($row = $query->fetch_array()){
	array_push($cats, $row);
}

$conn->close();

header("Content-type: application/json");
echo json_encode($cats);
die();
