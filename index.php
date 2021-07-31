<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://www.configuroweb.com/desarrollo/">ConfiguroWeb</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Crear Usuario y Contraseña con PHP y SQLite</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-4">
			<form method="POST" action="insert.php">
				<div class="form-group">
					<label>Nombre</label>
					<input type="text" class="form-control" name="firstname" required="required"/>
				</div>
				<div class="form-group">
					<label>Apellido</label>
					<input type="text" class="form-control" name="lastname" required="required"/>
				</div>
				<div class="form-group">
					<label>Usuario</label>
					<input type="text" class="form-control" name="username" required="required"/>
				</div>
				<center><button class="btn btn-primary" name="insert" >Insertar</button></center>
			</form>
		</div>
		<div class="col-md-8">
			<a href="generate.php" class="btn btn-success">Generar Contraseña</a>
			<br /><br />
			<table class="table table-bordered">
				<thead class="alert-info">
					<tr >
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Usuario</th>
						<th>Contraseña</th>
					</tr>
				</thead>
				<tbody>
					<?php
						require'conn.php';
						
						$query=$conn->query("SELECT * FROM `member`") or die("Failed to fetch row!");
						while($fetch=$query->fetchArray()){
							echo"<tr><td>".$fetch['firstname']."</td><td>".$fetch['lastname']."</td><td>".$fetch['username']."</td><td style='background-color:#f00; color:#fff;'>".$fetch['password']."</td></tr>";
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>	
</html>