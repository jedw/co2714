<?php
$conn = new mysqli("localhost", "root", "root", "mydatabase");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$out = array('error' => false);

$action="show";

if(isset($_GET['action'])){
	$action=$_GET['action'];
}

if($action=='show'){
	$sql = "select * from members";
	$query = $conn->query($sql);
	$members = array();

	while($row = $query->fetch_array()){
		array_push($members, $row);
	}

	$out['members'] = $members;
}

if($action=='search'){
	$keyword=$_POST['keyword'];
	$sql="select * from members where firstname like '%$keyword%' or lastname like '%$keyword%'";
	$query = $conn->query($sql);
	$members = array();

	while($row = $query->fetch_array()){
		array_push($members, $row);
	}

	$out['members'] = $members;
}

$conn->close();

header("Content-type: application/json");
echo json_encode($out);
die();

?>
