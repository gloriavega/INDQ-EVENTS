<?php
	include ("conexion.php");

	$link = new conectar; #crear objeto para conectar con servidor SQL
	$link->enlazar(); #llamar al metodo para conectar con servidor SQL
	#Se crea Objeto Event
	class Event{
		
		function createEvent ($t,$d,$f,$i,$dir){#Se crea metodo crear evento
			
			if ($t!="" || $d!="") {
				$event = mysql_query("INSERT INTO `events` (`id`, `title`, `description`, `Edate`, `image`, `location`) VALUES ('0','$t','$d','$f','$i','$dir')") or die("No se pudo hacer la creacion, intente más tarde" . mysql_error());
				#echo "Se ha creado el evento <br> <a href='../events.php'>Volver</a>";
				header("Location: ../events.php");
			}

			
			
		}#cierre de createEvent

		function QRYallevents (){#query para toos los eventos
			
			$query = mysql_query("SELECT * FROM events");
		}

		function ListarAllEvents (){#Metodo para mostrar todos los registros existentes

			$qry = mysql_query("SELECT * FROM events ORDER BY Edate ASC");#Query que ordena el listado de eventos

			$numEventos = mysql_num_rows($qry); #Cuenta el numero de registros
			

			while ($r = mysql_fetch_array($qry)) { #ciclo para desplegar cada evento hasta que 
				
				$fecha = $r['Edate'];

				echo "
				<center>
				<div id='Evento'>
				<center>
				<h2> ".$r['title']."</h2>
				<img src=".$r['image'].">
								
				<h4>Fecha del evento " .$fecha. "</h4>
				<br>".$r['description']."
				<br>
				<br>
				</center>
			</div>
			</center>";
			}

				
			
			}


		


	}#cierre de Event
?>