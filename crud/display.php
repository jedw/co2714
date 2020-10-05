<!DOCTYPE html>
<head>
<title>Display</title>
</head>
<body>
<div class="container">
	<h1>Records:</h1>
<?php
include 'connect.php';

$sql = "SELECT ID, firstname, surname, email FROM users";
$result = $mysqli->query ($sql);

if($result){
if ($result->num_rows > 0) {
	echo "<table class=\"table\">";
	echo "<thead class=\"thead-dark\">";
	echo "<tr>";
	echo "<th>ID</th>";
	echo "<th>Firstname</th>";
	echo "<th>Surname</th>";
	echo "<th>Email</th>";
	echo "</tr>";
	echo "</thead>";
	while($row = $result->fetch_assoc()) 
	{
		// output data of each row
		echo "<tr>";
		echo "<td>".$row['ID']."</td>";
		echo "<td>".$row['firstname']."</td>";
		echo "<td>".$row['surname']."</td>";
		echo "<td>".$row['email']."</td>";
		echo'<td><a href="edit.php?id='.$row["ID"].'">Edit</a></td>';
		echo'<td><a href="delete.php?id='.$row["ID"].'">Delete</a></td>';
		echo "</tr>";
	}
	echo "</table>";
	  
} else {
    echo "0 results";
}
$result->close();
$mysqli->close();
}
?>
</div>
</body>
</html>
