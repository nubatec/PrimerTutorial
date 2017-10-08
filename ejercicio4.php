<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio-4</title>
	<style type="text/css">
		table, tr, td {
			border: 1px solid black;
		}
	</style>
</head>
<body>

	<p><b> Mostrar en pantalla una tabla de 10 por 10 con los números del 1 al 100 </b></p>

	<table style="width:100%">
		<?php

		$j = 1;

		while ( $j <= 10) {
			
			echo "<tr>";

			static $i = 1;  //ambito que mantiene el valor de una variable

			while ( $i <= 100) {
				
				echo "<td> $i </td>";
				
				$i++;

				if ($i%10 == 1) {
					break;
				}
			}
			
			echo "</tr>";

			$j++;
		}

		?>

	</table>

</body>
</html>