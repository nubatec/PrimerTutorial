<!DOCTYPE html>
<html>
<head>
	<title>Video-9-c</title>

	<meta charset="utf-8">
	
	<style type="text/css">
		
		.no_validado{
			font-size: 18px;
			color: #F00;
			font-weight: bold;
		}

		.validado{
			font-size: 18px;
			color: #0C3;
			font-weight: bold;
		}

	</style>
	
</head>
<body>


	<?php

	if(isset($_POST["enviando"])) {

		$usuario = $_POST["nombre_usuario"];

		$edad = $_POST["edad_usuario"];

		if($usuario == "Diego" && $edad == 25) {

			echo "<p class = 'validado'> Puedes entrar </p>";

		} else {

			echo "<p class = \"no_validado\"> No puedes entrar </p>";
		}
	}

	?>


</body>
</html>