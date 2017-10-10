<!DOCTYPE html>
<html>
<head>
	<title>Video-9</title>
</head>
<body>

	<p><b> Operadores de comparación </b></p>
	<a href="https://www.youtube.com/watch?v=gYbhDXhJz6E&t=193s"> Enlace del video </a>
	<br>
	<br>
	<br>
	<br>

	<?php

	$variable1 = 8;

	$variable2 = "8";

	$variable3 = "Juan";

	echo "Comparación utilizando \" == \"";
	echo "<br>";

	if ($variable1 == $variable2) {

		echo "Son iguales";
		echo "<br>";

	} else {

		echo "No son iguales";
		echo "<br>";

	}

	echo "Comparación utilizando \" === \"";
	echo "<br>";

	if ($variable1 === $variable2) {
		
		echo "Son iguales";
		echo "<br>";

	} else {

		echo "No son iguales";
		echo "<br>";
	}

	echo "Comparación utilizando \" != \"";
	echo "<br>";

	if ($variable1 != $variable3) {
		
		echo "Son diferentes";
		echo "<br>";

	} else {

		echo "No son diferentes";
		echo "<br>";
	}

	?>

</body>
</html>