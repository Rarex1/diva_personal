<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Barrio" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.css">
</head>
<body>
	<div class="content2 activo" id="tiposCuenta">
		<div class="info">
			<h2>Registro</h2>
			<p>Escoge el tipo de cuenta que quieres crear...</p>
		</div>
		<div class="opciones">
			<button id="boton1" onclick="boton1()">Normal</button>
			<button id="boton2" onclick="boton2()">Diseñador</button>
		</div>
	</div>
	<div class="content2 oculto" id="opciones1" style="flex-direction: column; align-items: center; font-family: Barrio;">
		<h2>Selecciona un metodo de registro...</h2>
		<div class="opcionesRegistro">
			<i class="fa fa-google-plus" aria-hidden="true" style="color: #F44336;"></i>
			<i class="fa fa-facebook" aria-hidden="true" style="color: #3b5998;"></i>
			<img src="img/diva_logo.jpeg" alt="" style="height: 200px; border-radius: 50%;">
		</div>
	</div>
	<div class="content2 oculto" id="opciones2" style="flex-direction: column; align-items: center; font-family: Barrio;">
		<h2>Seleccionaun metodo de registro...</h2>
		<div class="opcionesRegistro">
			<i class="fa fa-google-plus" aria-hidden="true" style="color: #F44336;"></i>
			<i class="fa fa-facebook" aria-hidden="true" style="color: #3b5998;"></i>
			<a href="registroForm.php">
				<img src="img/diva_logo.jpeg" alt="" style="height: 200px; border-radius: 50%;">
			</a>
		</div>
	</div>
	<script type="text/javascript">
		function boton1()
		{
			document.getElementById('opciones1').classList.remove('oculto');
			document.getElementById('opciones1').classList.add('activo');
			document.getElementById('tiposCuenta').classList.remove('activo');
			document.getElementById('tiposCuenta').classList.add('oculto');
		}
		function boton2()
		{
			document.getElementById('opciones2').classList.remove('oculto');
			document.getElementById('opciones2').classList.add('activo');
			document.getElementById('tiposCuenta').classList.remove('activo');
			document.getElementById('tiposCuenta').classList.add('oculto');	
		}
	</script>
</body>
</html>