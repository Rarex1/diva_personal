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
	$clv = $_POST["clave"];
	/*Se genera la conecion a la base de datos*/
	$con = new conexion();
	$conexion = $con->getConexion();
	/*Se genera una encriptacion SHA256 a la clave antes de guardar en base de datos*/
	$hashed = crypt($clv, '$5$rounds=6524$SoMosArMinLovErsDeSignErs$');

	$query = "insert into usuarios(nombre,apellido,email,fecha_nacimiento,telefono,nick,blog,clave) values ('$nom','$ape','$mai','$nac','$tel','$nic','$blo','$hashed');";

	$resultado = $conexion->query("select * from usuarios where nick = '$nic'");
	$filas = mysqli_num_rows($resultado);
	if($filas > 0)
	{
		mysqli_close($conexion);
		header("Location: ../registroForm.php?cod=1");
	}
	else
	{
		$conexion->query($query);
		mysqli_close($conexion);
		echo "Se ingresaron correctamente los datos";
	}
 ?>