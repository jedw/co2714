<!DOCTYPE html>
<html>
	<head>
		<title>Showrows</title>
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
		<div class="container"><h1>Show Rows</h1>
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th>ID</th> <th>Forname</th> <th>Surname</th> <th>Age</th>
					</tr>
				</thead>
				<?php 
				
					foreach ($records as $row){
						echo '<tr>' ;
						echo '<td>'.$row->ID.'</td>';
						echo '<td>'.$row->Forname.'</td>';
						echo '<td>'.$row->Surname.'</td>';
						echo '<td>'.$row->Age.'</td>';
						?>
							<td><a href="<?php echo site_url("Mycontroller/delete/".$row->ID); ?>">Delete</a></td> 
							<td><a href="<?php echo site_url("Mycontroller/edit/".$row->ID); ?>">Edit</a></td> 
						<?php
					
						echo '</tr>';
					}
				?>
			 </table>
		 </div>
	</body>
</html>
