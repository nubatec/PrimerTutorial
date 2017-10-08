<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio-3</title>
</head>
<body>

	<p><b> hacer un programa que muestre en pantalla información de PHP con la función phpinfo(). Muestre la información centrada horizontalmente en la pantalla. </b></p>

	<?php

	$infophp = phpinfo();

	echo "<p align=center> $infophp </p>";

	?>

</body>
</html>