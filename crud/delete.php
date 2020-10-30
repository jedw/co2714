<!DOCTYPE html>

<html>
<head>
<title>Delete</title>
</head>
<body>
<p>Are you sure?</p>
<a href="delete.php?id=<?php echo $_GET['id']?>&sure=TRUE">Yes</a>
<a href="display.php">No - Go back</a>
<?php
if(isset($_GET['sure'])){
	if($_GET['sure'] == TRUE){
		include 'connect.php';

		$deletequery = "DELETE FROM users WHERE ID=?";
		$stmt = $mysqli->prepare($deletequery);
		$stmt->bind_param('s', $_GET['id']);
		$stmt->execute();

		header("location: display.php");
	}
}
?>
</body>
</html>
