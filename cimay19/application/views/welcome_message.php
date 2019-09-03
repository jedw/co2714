<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Jonathan Edwards's CodeIgniter example</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link" href="<?php echo site_url('Mycontroller/show')?>">Show all rows</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo site_url('Mycontroller/insert')?>">Insert record</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo site_url('Mycontroller/check')?>">Check for record</a></li>
			</ul>
		</nav>
<h1>Homepage</h1>
</body>
</html>
