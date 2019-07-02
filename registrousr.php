<html>
<head>
		<title>
			Event Discover - Registro
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <!--Aceptar caracteres especiales-->
</head>

<body>
	<form id="usuarios" method="POST" action="funciones/users.php"> 				<!--Formulario de registro de usuarios-->
		<h1>Registro</h1>
		<h3>INDQ Events</h3>

		<br>
		<br>
		<br>
		<br>Nombre (s)								<!--Nombre-->
		<input type="text" name="txtnombre" required>
		<br>
		
		<br>Apellido (s)							<!--Apellido-->
		<input type="text" name="txtapellido" required>
		
		<br>Correo									<!--Correo-->
		<input type="email" name="txtemail" required>

		<br>Genero
		<br>										<!--Genero-->
		<input type="radio" name="rdgenero" value="Masculino">Masculino
		
		<input type="radio" name="rdgenero" value="Femenino">Femenino

		<br>										<!--Contraseña-->
		<br>Contraseña
		<input type="password" name="txtpsw-usr" required>

		<br>Confirmar contraseña
		<input type="password" name="txtpsw-usr2" required>

		<br>
		<br>
		<input type="submit" name="confirmar" value="Confirmar" class="button">	<!--Aceptar-->
		<a href="index.php"><h6>¿Ya eres miembro? Inicia sesión</h6></a>

	</form>
</body>

</html>