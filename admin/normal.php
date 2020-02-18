<?php

session_start();

if (!isset($_SESSION['login']))
{
	header("Location: login.php");
}

echo "<h1>Welcome ".$_SESSION['user']."</h1>";

echo"<a href='logout.php'>Logout</a>";

?>
