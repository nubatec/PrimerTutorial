<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio-5</title>
	<style type="text/css">
		
		table, tr, td {
			border: 1px solid black;
		}

		.gris {
			background-color: gray;
		}

	</style>
</head>
<body>

	<p><b> crear un tabla de 10x10 enumerada del 1 al 100 pero colorear las filas alternando gris y blanco. Además, el tamaño será una constante: define(TAM, 10) </b></p>

	<table>

	<?php

	define("TAM", 10, true); //definiendo una constante insensitive 

	for ($j=1; $j <= tam; $j++) { 
		
			if ($j%2 == 0) {

				echo "<tr class = \"gris\">"; //definiendo las filas pares de color gris

			} else {

				echo "<tr>";
				
			}

			static $celda = 1; 

			for ($i=1; $i <= tam ; $i++) { 
				
				echo "<td> $celda </td>";

				$celda++;

			}

			echo "</tr>";

		}

	?>

	</table>


</body>
</html>