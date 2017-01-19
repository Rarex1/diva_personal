<?php 

	
	/*Obtencion de datos del formulario*/
	$nom = $_POST["nombre"];
	$ape = $_POST["apellido"];
	$mai = $_POST["mail"];
	$nac = $_POST["nacimiento"];
	$tel = $_POST["telefono"];
	$nic = $_POST["nick"];
	$blo = $_POST["blog"];
	/*Se genera la conecion a la base de datos*/
	$conexion = mysqli_connect("localhost","root","","diva_test");

	$query = "insert into usuarios(nombre,apellido,email,fecha_nacimiento,telefono,nick,blog) values ('$nom','$ape','$mai','$nac','$tel','$nic','$blo');";

	
	$resultado = $conexion->query("select * from usuarios where nick = '$nic';");
	if(mysql_num_rows($resultado)>0)
	{
		mysql_close($conexion);
		header("Location: ../index.php?cod=1");
	}
	else
	{
		$conexion->query($query);
		mysql_close($conexion);
		echo "Se ingresaron correctamente los datos";
	}
 ?>