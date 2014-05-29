<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Eliminar</title>
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
					$idcliente = $_POST["id"];
					$eliminar="DELETE FROM cliente WHERE id_cliente='$idcliente'";
					mysql_query($eliminar);
				if ($modificar) {
					printf("El usuario no ha sigo elimiando de la BD");					
				}else					
				printf("El usuario ha sigo elimiando de la BD con el id : ".$idcliente);				
				mysql_close($enlace);
				?>
			</div>
		</div>
	</div>
</body>
</html>