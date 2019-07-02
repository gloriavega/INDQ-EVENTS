<?php
	
			
			class conectar{

				function enlazar(){
					$link = mysql_connect('localhost','root','') or die("Error al conectar " . mysql_error());
					mysql_select_db('indqevents');

				}

			}

			
			?>