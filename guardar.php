<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Principal</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="span2"></div>
			<div class="span6">
				<?php 
					require("conexion.php");
					$nombre 	= $_POST["nom"];
					$direccion 	= $_POST["dir"];
					$inserta = "INSERT INTO cliente (nombre, direccion) values ('$nombre','$direccion')";
					mysql_query($inserta);
					printf("El usuario ha sigo agregado a la BD con el id : %d\n", mysql_insert_id());
					mysql_close($enlace);
				?>
			</div>			
		</div>
	</div>	
</body>
</html>