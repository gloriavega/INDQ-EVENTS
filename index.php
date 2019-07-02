<html>
	
	<head>
		<link rel="stylesheet" type="text/css" href="funciones/estilo.css" media="screen" />
		<title>
			Event Discover
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>

	<body>
		<center>
		<div id="login"> 
			<form id="loguear" method="POST" action="funciones/users-login.php"><!--Inicia formulario de inicio de sesión -->
			<br>Correo:
			<br>
			<input type="email" name="txtcorreo" placeholder="Ingresa tu correo">
			<br>
			<br>Contraseña:
			<br>
			<input type="password" name="txtpassword" placeholder="Ingresa tu contraseña">
			<br>
			<br>
			<input type="submit" name="acept" value="Accesar" class="button">

			<a href="registrousr.php"><h6>¿No tienes una cuenta? Registrate</h6></a>

		</form> <!--Termina formulario de inicio de sesión -->
		</div>
		</center>
	</body>

</html>