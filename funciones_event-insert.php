<?php
	include ("event-new.php");

	$titulo = $_POST['txttitulo'];
	$descripcion = $_POST['txtdescripcion'];
	$fecha = $_POST['txtfecha'];
	$imagen = $_POST['inimagen'];
	$direccion = $_POST['txtdireccion'];

	session_start();#sesion de usuario abierta
	$link = new conectar; #crear objeto para conectar con servidor SQL
	$link->enlazar(); #llamar al metodo para conectar con servidor SQL
	
	$crear_evento = new Event; #Se instancia el objeto Event
	$crear_evento->createEvent($titulo, $descripcion, $fecha, $imagen); #Se llama al metodo para crear evento	
?>