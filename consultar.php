<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Consultar</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">	
</head>
<body>
<div class="container">
	<div class="row">
		<div class="span3"></div>
		<div class="span4">
					<? 
		require ("conexion.php");
		$sql = "SELECT * FROM cliente";
		$resultado = mysql_query($sql);
			echo "
			<h1>REGISTROS</h1>
			<table>
				<tr><td>Id</td><td>Nombre</td><td>Direcci&oacute;n</td></tr>"; $i = 0 ;
				while ($row = mysql_fetch_row($resultado)){
					echo "<tr><td><input type='hidden' name='id[$i]' value='".$row[0]."' />".$row[0]."</td>
			          <td><input type='text' name='nombre[$i]' value='".$row[1]."' /></td>
					  <td><input type='text' name='usuario[$i]' value='".$row[2]."'/></td>
					  </tr>";$i++; 
					}
					echo "</table>";
		?>
		</div>
	</div>
</div>
</body>
</html>