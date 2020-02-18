<!DOCTYPE html>
<html>
	<head>
		<title>Showrows</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
	</head>
	<body>
	<?php include 'navbar.php'; ?>
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
							<td><a href="<?php echo site_url("delete/".$row->ID); ?>">Delete</a></td> 
							<td><a href="<?php echo site_url("edit/".$row->ID); ?>">Edit</a></td> 
						<?php
					
						echo '</tr>';
					}
				?>
			 </table>
		 </div>
	</body>
</html>
