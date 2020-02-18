<?php

session_start();

if (!isset($_SESSION['login']))
{
	header("Location: login.php");
}
else if ($_SESSION['admin'] == 0)
{
	echo "<p>You are not authorized to access this area</p>";
	echo "<a href='login.php'>Login</a>";
	echo "<a href='normal.php'>Return</a>";
}
else{
	
	echo "<h1>Welcome ".$_SESSION['user']."</h1>";
	echo "<h1>Admin area</h1>";
	echo "<p>Here be dragons</p>";
	echo "<a href='logout.php'>Logout</a>";
}
?>
