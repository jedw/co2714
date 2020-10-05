<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

include 'connect.php';

if (!isset( $_POST['submit'] )) {
    echo "<p>ERROR form was not submitted</p>";
}
else {
	$hashpw = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $sql = "insert into users (firstname, surname, email, password) values (?,?,?,?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('ssss', $_POST['fname'], $_POST['sname'], $_POST['email'], $hashpw);
    if (!$stmt->execute()) {
        echo "Error: ". $mysqli->error;
    }
    else {
        echo "<p>Successfully Added Record</p>";
        echo "<a class=\"nav-link\" href=\"display.php\">Back</a>";
    } 
    $mysqli->close();
}
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Add user</title>
</head>
<body>
	<div class="container">
<h1>Add record:</h1>
<form action="newuser2.php" method="post" >
   Firstname: <br><input  type="text" id="fname" name="fname"/><br>
   Surname: <br><input  type="text" id="sname" name="sname"/><br>
   Email: <br><input  type="text" id="email" name="email"/><br>
   Password: <br><input  type="password" id="pass" name="pass"/><br>
   <input  type="submit" id="submit" name="submit" value="submit"/>
</form>
</div>
</body>
</html>
