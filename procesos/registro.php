<?php 

	include('../clases/conexion.php');
	/*Obtencion de datos del formulario*/
	$nom = $_POST["nombre"];
	$ape = $_POST["apellido"];
	$mai = $_POST["mail"];
	$nac = $_POST["nacimiento"];
	$tel = $_POST["telefono"];
	$nic = $_POST["nick"];
	$blo = $_POST["blog"];
	/*Se genera la conecion a la base de datos*/
	$con = new conexion();
	$conexion = $con->getConexion();

	$query = "insert into usuarios(nombre,apellido,email,fecha_nacimiento,telefono,nick,blog) values ('$nom','$ape','$mai','$nac','$tel','$nic','$blo');";

	$resultado = $conexion->query("select * from usuarios where nick = '$nic'");
	$filas = mysqli_num_rows($resultado);
	if($filas > 0)
	{
		mysqli_close($conexion);
		header("Location: ../index.php?cod=1");
	}
	else
	{
		mysql_query($query);
		mysqli_close($conexion);
		echo "Se ingresaron correctamente los datos";
	}
 ?>