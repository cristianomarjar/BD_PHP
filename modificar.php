<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Modificar</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">	
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="span2"></div>
			<div class="span6">
				<?php 
				require ("conexion.php");
				$idcliente = $_POST["id"];
				$nombre = $_POST["nom"];
				$direccion = $_POST["dir"];
				if ($idcliente<=20) {
					$modificar="UPDATE cliente SET nombre='$nombre', direccion='$direccion'  
				WHERE id_cliente ='$idcliente'";
				mysql_query($modificar);
				if ($modificar) {
					printf("El usuario ha sigo modificado de la BD con el id : ".$idcliente);		
				}else
					printf("El usuario no ha sigo modificado de la BD");
				mysql_close($enlace);
				}
				else
					echo "No se puede modificar el id! ".$idcliente;
				?>
			</div>
		</div>
	</div>
</body>
</html>