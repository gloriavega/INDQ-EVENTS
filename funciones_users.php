<?php
	include ("conexion.php");
	include ("BD/acceso.php");
	
	#Declaración de variables interface registrousr.php
	$firstname = $_POST['txtnombre']; #Variable de nombre
	$lastname = $_POST['txtapellido']; #Variable de apellido
	$email = $_POST['txtemail']; #variable de correo
	$password = $_POST['txtpsw-usr']; #variable de contraseña
	$gender = $_POST['rdgenero']; #variable de genero
	$psw2 = $_POST['txtpsw-usr2'];#variable para confirmar contraseña
	
	$user = new user;
	$user->ValidacionVar($firstname,$lastname,$email,$password,$psw2,$gender);

	
	class user 
	{
			

		function ValidacionVar ($nombre,$apellido,$correo,$contraseña1,$contraseña2,$genero){ 	#Metodo para validar variables
			
			if (empty($nombre)) { #Valida nombre
				echo "<br>Falta Nombre";
			}
			
			if (empty($apellido)) { #Valida apellido
				echo "<br>Falta Apellido";
				echo "<br>";
			}
			
			
			if (empty($correo)) { #Valida e-mail
				echo "Falta Correo";
			}
			

			if (empty($contraseña1)) { #Valida contraseña
				echo "Falta Contraseña";
			}

			else
			{
				$l  = strlen($contraseña1); #Largo de la contraseña
				
				if ($l < 8) {
					echo "<br> La contraseña debe tener mínimo 8 carácteres";
				}
				else
				{
					if ($contraseña2 != $contraseña1) { #Compara ambas contraseñas
						echo "Las contraseñas no coinciden";
					}
					else
					{
						
						$agregar = new user;
						$agregar->CrearUsuario($nombre,$apellido,$correo,$contraseña1,$genero);

					}
				}# Fin de largo de la contraseña
			}

		}#Fin del metodo ValidacionVar

		function CrearUsuario($nom,$ap,$em,$psw,$gn){ #Insertar usuario en tabla usuarios de base de datos INDQ

				$link = new conectar;#Crear conexion con base de datos
				$link->enlazar();#Llamar a la conexion

				
				$existe = mysql_query("SELECT email FROM usuarios WHERE email = '$em'") or die("Error en la busqueda " . mysql_error());#Buscar si el correo ya existe en tabla usuarios
				$x = mysql_fetch_array($existe);#Crear arreglo para usuario

				if ($x == 0) {#Inserta si no hubieron coincidencias
					
					mysql_query("INSERT INTO `usuarios` (`iduser`, `firstname`, `lastname`, `email`, `password`, `gender`) VALUES ('0','$nom','$ap','$em','$psw','$gn')") or die("Error al insertar " . mysql_error());#sentencia SQL de insersión

					header("Location: ../index.php");#Redirige a pagina de inicio para iniciar sesión

				}
				else{
					echo "Este correo ya esta registrado";
				}
			

		}#Fin de metodo CrearUsuario


	}#Cierre de clase Usuario

?>