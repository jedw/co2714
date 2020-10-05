<!DOCTYPE html>
<html>
<head>
<title>my first page</title>
</head>
<body>
	<div class="container">
<?php
if (isset( $_POST['submit'] ))
{
	include 'connect.php';

	$updatequery ="UPDATE users SET firstname=?, surname=?, email=?, password=? WHERE ID=?";
    $stmt = $mysqli->prepare($updatequery);
    $hashpw = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $stmt->bind_param('sssss', $_POST['fname'], $_POST['sname'], $_POST['email'], $hashpw, $_GET['id']);
	
    if (!$stmt->execute()) {
        echo "Error: ".$mysqli->error;
    }
    else {
        echo "<p>Record updated successfully</p>";
        echo "<a href=\"display.php\">display</a>";
    } 
    $mysqli->close();
}
else
{
	include 'connect.php';
    
    $populatequery = "SELECT * from users WHERE ID=?";
    $stmt = $mysqli->prepare($populatequery);
    $stmt->bind_param('s', $_GET['id']);
    $stmt->execute();
    $result = $stmt->get_result();

	$user = $result->fetch_assoc();
    $fn = $user['firstname'];
    $sn = $user['surname'];
    $em = $user['email'];
?>
	<h1>Edit record:</h1>
    <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="post" >
        Firstname: <br><input  type="text" id="fname" name="fname" value="<?php echo "$fn"; ?>"/><br>
        Surname: <br><input  type="text" id="sname" name="sname" value="<?php echo"$sn"; ?>"/><br>
        Email: <br><input  type="text" id="email" name="email" value="<?php echo"$em"; ?>"/><br>
        Password: <br><input  type="password" id="pass" name="pass" value=""/><br>
    <input type="submit" id="submit" name="submit" value="submit"/>
    </form>	
</div>
</body>
</html>
<?php  
}
?>