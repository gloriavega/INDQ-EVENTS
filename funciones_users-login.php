<?php
	include ("conexion.php");
	
	
	$correo = $_POST['txtcorreo'];
	$psw = $_POST['txtpassword'];
	
	session_start();
	$iniciar_sesion = new loguear;#instanciar objeto loguear
	$iniciar_sesion->login($correo, $psw);
	$DENEGADO = '';
	
					#Aquí inicia clase loguear
	class loguear{	
		
		public function login($e,$c){ #Inicia la función de inicio de sesión
			
			$link = new conectar;#Metodo para conectarse a base de datos
			$link->enlazar();

			$buscar = mysql_query("SELECT * FROM usuarios WHERE email = '$e' AND password = '$c'") or die("Error al hacer consulta " . mysql_error());
			$resultados = mysql_fetch_array($buscar);

			if ($resultados != 0) {
	
				$_SESSION['usuario'] = $resultados['firstname'];
				$_SESSION['id'] = $resultados['iduser'];
				header("Location: ../events.php");				
			}
			else
			{
				echo "<br>Usuario y/o contrasena no existen <a href='../index.php'>da click para volver</a>";
				

			}

		}#Termina la función login

		
	}#Termina la clase loguear
?>