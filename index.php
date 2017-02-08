<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Barrio" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.css">
	<!--Import de Jquery version compatible con sintax de window.load-->
	<script src="js/jquery-1.11.0.min.js"></script>
	<!--Script de preloader-->
	<script>
		$(window).load(function () {
	  $('#cargando').fadeOut();
	});
	</script>
</head>
<body>
	<!--Preloader-->
	<div id="cargando">
		<img src="img/boton_1.png" alt="">
		<br>
		<p style="color: gray;">Cargando las ideas del mundo...</p>
	</div>
	<!--Inicio de pagina-->
	<div class="inicio">
	<img src="img/foto0.jpg" alt="">
		<div class="content">
			<h1>Diva Proyect</h1>
			<form action="">
				<input type="mail" placeholder="Correo electronico">
				<input type="password" placeholder="Clave">
				<input type="submit" value="Ingresar">
			</form>
		</div>
		<div class="contRegistro">
			<a href="registroForm.php">Registrate</a>
		</div>
	</div>
</body>
</html>