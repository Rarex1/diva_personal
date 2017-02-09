<?php 
	
	include_once('hash_equals.php');
	include_once('../clases/conexion.php');

	$mailUser = $_POST['mail'];
	$passUser = $_POST['password'];

	$conexion = new conexion();

	$sql = "select email, clave from usuarios where email = '$mailUser';";

	$link = $conexion->getConexion();

	$resultado = $link->query($sql);

	while ($fila = mysqli_fetch_array($resultado))
	{
		echo $fila['clave'];
	}

 ?>