<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="formulario">
		<form action="procesos/registro.php" method="POST">
			<h3>Registro</h3>
			<input type="text" name="nombre" placeholder="Nombre" required="required">
			<input type="text" name="apellido" placeholder="Apellido" required="required">
			<input type="mail" name="mail" placeholder="Correo electronico" required="required">
			<input type="date" name="nacimiento" placeholder="Fecha de nacimiento" required="required">
			<input type="text" name="telefono" placeholder="Telefono">
			<input type="text" name="nick" placeholder="Nick name" required="required">
			<input type="url" name="blog" placeholder="blog">
			<input type="submit" value="Registrar">
		</form>
	</div>
</body>
</html>