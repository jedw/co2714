<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Login</h1>
		<form method="POST" action="login.php">
		Username:<br><input type="text" name="username" id="username"/>
		<br>
		Password:<br><input type="password" name="password" id="password"/>
		<br>
		<input type="submit" name="submit" value="Login"/>
		</form>

<?php 
include 'connect.php';
if (isset($_POST['submit'])){

$username = $_POST['username'];
$password = $_POST['password'];	

$stmt = $mysqli->prepare("SELECT * FROM admin_example WHERE Username = ?");
$stmt->bind_param('s', $username);

$stmt->execute();

$user = $stmt->get_result()->fetch_assoc();

if (!empty($user['Username'])) { 
    if (password_verify($password, $user['Password'])) {
        echo "<p>Login Sucessful</p>";
        session_start();
        
        $_SESSION['login'] = TRUE;
        $_SESSION['user'] = $user['Username'];
        $_SESSION['admin'] = $user['Admin'];

        if ($user['Admin'] == 1)
        {
            echo "<a href=\"admin.php\">Admin area</a>";
        }    
        else
        {
            echo "<a href=\"normal.php\">User area</a>";
        }
         
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
