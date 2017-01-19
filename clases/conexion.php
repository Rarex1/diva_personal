<?php 

	/**
	* Clase conexion
	*/
	class conexion
	{
		
		private $user = "";
		private $pass = "";
		private $server = "";
		private $base = "";
		public $conexion;

		function conexion()
		{
			$this->user = "root";
			$this->pass = "";
			$this->server = "localhost";
			$this->base = "diva_test";
		}
		function conectar()
		{
			$this->conexion = mysqli_connect($this->server,$this->user,$this->pass,$this->base);
			if(!$this->conexion)
			{
				die("No se pudo conectar");
			}
		}
		function desconectar()
		{
			mysqli_close($this->conexion);
		}
		function registrarUsuario($query)
		{
			$this->conexion->query($query);
		}
		function consultarDato($dato)
		{
			$sql = "select * from usuarios where nick = '$dato';";
			$resultado = $this->conexion->query($sql);
			return $resultado;
		}
	}
 ?>