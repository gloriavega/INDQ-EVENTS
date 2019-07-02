<html>
	<head>
		<link rel="stylesheet" type="text/css" href="funciones/estilo.css" media="screen" />
		<title>
			Event Discover - Eventos
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <!--Aceptar caracteres especiales-->
	</head>

	<body>
		<center>
		<form id="Evento" method="POST" action="funciones/event-insert.php">					<!--Formulario para eventos-->

			<br>Titulo 										<!--Titulo-->
			<br>
			<input type="text" name="txttitulo" placeholder="Ingresa el titulo del evento" required>
			<br>


			<br>Descripción
			<br>											<!--Descripción del evento-->
			<textarea name="txtdescripcion" placeholder="Ingresa descripción del evento" spellcheck="true" cols="20" rows="15" required></textarea>
			<br>

			<br>Fecha 										<!--Fecha del evento-->
			<input type="date" name="txtfecha" min=<?php $hoy=date("D d F Y"); echo $hoy;?> required>

			<br>
			<br>
			<br><img src=imagen.value>
			<br>											<!--Subir una imagen-->
			<input type="file" name="inimagen" value="Subir imagen" accept="image/jepg" required>
			
			<br>
			<br>Dirección 									<!--Seleccionar la dirección del evento-->
			<input type="text" name="txtdirección" placeholder="Buscar dirección...">
			<br>
			<br>
			<br>
			<input type="submit" class="button" value="Registrar">
			<input type="reset" value="Cancelar" onClick="location.href='events.php'">

		</form>											<!--Fin del formulario para eventos-->
		</center>
	</body>

</html>