<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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

$stmt = $mysqli->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param('s', $email);

$stmt->execute();

$user = $stmt->get_result()->fetch_assoc();

if (!empty($user['email'])) { 
    if (password_verify($password, $user['password'])) {
        echo "<p>Login Sucessful</p>";
        session_start();
        
        $_SESSION['login'] = TRUE;
        $_SESSION['user'] = $user['email'];

        echo "<a href=\"secret.php\">Top secret members only area</a>";
         
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
