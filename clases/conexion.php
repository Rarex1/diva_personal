<?php 

	/**
	* Clase de conexion
	*/
	class conexion
	{

		function getConexion()
		{
			$conexion = mysqli_connect("localhost","root","","diva_test");
			return $conexion;
		}
	}

 ?>