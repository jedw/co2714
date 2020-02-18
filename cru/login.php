<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Login</h1>
<form method="POST" action="login.php">
Email:<br><input type="text" name="email" id="email"/>
<br>
Password:<br><input type="password" name="password" id="password"/>
<br>
<input type="submit" name="submit" value="Login"/>
</form>

<?php 
include 'connect.php';
if (isset($_POST['submit'])){

$email = $_POST['email'];
$password = $_POST['password'];	

$stmt = $mysqli->prepare("SELECT * FROM users WHERE Email = ?");
$stmt->bind_param('s', $email);

$stmt->execute();

$user = $stmt->get_result()->fetch_assoc();

if (!empty($user['Email'])) { 
    if (password_verify($password, $user['Password'])) {
        echo "<p>Login Sucessful</p>";
        session_start();
        
        $_SESSION['login'] = TRUE;
        $_SESSION['user'] = $user['Email'];
         
    } else {
		echo "<p>Login Failed</p>";
    }
} else {
    echo "<p>This user does not exist</p>"; 
}

$stmt->close();
$mysqli->close();
	}
?>
</div>
</body>
</html>
