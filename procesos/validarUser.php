<?php 
	/*Incluciones: Validacion con hash_equals y establecimiento de conexion a la Base de datos*/
	include_once('hash_equals.php');
	include_once('../clases/conexion.php');

	/*Variables usadas*/
	$mailUser = $_POST['mail'];//Datos por POST de correo ingresado
	$passUser = $_POST['password'];//Datos por POST de clave ingresado
	$conexion = new conexion();//Objeto de conexion
	$sql = "select email, clave from usuarios where email = '$mailUser';";//Sentencia SQL a utilizar
	$link = $conexion->getConexion();//Se genera la funcion de conexion
	$resultado = $link->query($sql);//Datos devueltos al momento de ejecutar la sentencia SQL
	$clave = "";//Variable donde se almacenara clave del Base de datos
	$mail = "";//Variable donde se almacenara mail de la Base de datos

	/*Se obtienen datos de la BD y se almacenan en las variables*/
	while ($fila = mysqli_fetch_array($resultado))
	{
		$clave = $fila['clave'];
		$mail = $fila['email'];
	}

	/*Se validan las claves desencriptando los datos*/
	if(hash_equals(('$5$rounds=6524$SoMosArMinLovErs$'.$clave), crypt($passUser, '$5$rounds=6524$SoMosArMinLovErs$')))
	{
		echo "Validado";
	}
	else
	{
		echo "Clave o usuario incorrecto";
	}
	

 ?>