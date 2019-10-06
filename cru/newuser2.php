<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

include 'connect.php';

if (!isset( $_POST['submit'] )) {
    echo "<p>ERROR form was not submitted</p>";
}
else {
	$hashpw = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $sql = "insert into users (firstname, surname, email, password) values ('".$_POST['fname']."','".$_POST['sname']."','".$_POST['email']."','".$hashpw."')";
  
    if (!$mysqli->query($sql)) {
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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
<h1>Add record:</h1>
<form action="newuser2.php" method="post" >
   Firstname: <br><input class="form-control" type="text" id="fname" name="fname"/><br>
   Surname: <br><input class="form-control" type="text" id="sname" name="sname"/><br>
   Email: <br><input class="form-control" type="text" id="email" name="email"/><br>
   Password: <br><input class="form-control" type="password" id="pass" name="pass"/><br>
   <input class="btn btn-primary" type="submit" id="submit" name="submit" value="submit"/>
</form>
</div>
</body>
</html>
