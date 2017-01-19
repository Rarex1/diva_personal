<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

		include("../clases/conexion.php");
		$conexion = new conexion();
		$link = $conexion->getConexion();
		$result = $link->query("SELECT * FROM usuarios");
		$filas = mysqli_num_rows($result);
		while ($fila = mysqli_fetch_array($result)){
			echo $fila['nick'];
		}
		echo "Hay ".$filas." filas.";
	 ?>
</body>
</html>