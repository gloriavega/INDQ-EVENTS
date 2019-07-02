<html>
<head>
		<link rel="stylesheet" type="text/css" href="funciones/estilo.css" media="screen" />
		<title>
			Event Discover - Eventos
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <!--Aceptar caracteres especiales-->
</head>

<body>
<div id="pagina">
	
	
	<div id="info-usuario" action="">					<!--Menu Usuario-->
		
			<input type="search" placeholder="Buscar..." name="buscartxt"><!--Buscar evento-->
			<input type="submit" class="button" name="buscarbtt" value="Buscar"><!--Boton para buscar-->

		<ul class="nav">
			<li><a href="">
			<?php
			#include ("funciones/users-login.php");
			session_start();
			echo $_SESSION['usuario']; ?>
			</a>
			</li>
			<ul>
				<li><a href="nvo-evento.php">Agregar evento</a></li>
				<li><a href="funciones/users-loguot.php">Cerrar sesión</a></li>
			</ul>
		</ul>
	</div>								<!--Fin del menu usuario-->

	<div id="eventos" name="lista-eventos">					<!--Enlistado de eventos-->
			<?php 
				include ("funciones/event-new.php");

				$elementos = new Event;
				$elementos->ListarAllEvents();


			?>
			
	</div>								<!--Fin del listado de eventos-->


</div>
</body>
</html