<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Uma primeira aula de PHP 2019</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
	<style type="text/css">
		.letra{
			color: blue;
		}

	</style>
	<script type="text/javascript">
	</script>

</head>
<body>

	<?php 

		echo "Eu acredito na maldição do Olá Mundo!<br>";
		echo "Aloisio Sousa";
	?>
	<br><br>

	Teste de ARRAY <br><br>

	<?php 

		$carros = array('Fusca','siena','corola','hilux');

		echo $carros[0] . " ";
		echo $carros[1] . " ";
		echo $carros[2] . " ";
		echo $carros[3] . " <br>";

		// var_dump($carros);
		print_r($carros);

	?>
	<br><br>

	Teste de Tempo <br><br>

	<?php 

		date_default_timezone_set("America/Los_Angeles");

		$data_hoje = date ("d/m/Y", time());

	?>

	<p align="center">Hoje é dia <?php echo $data_hoje; ?></p>

	<br><br>

	Teste de Variáveis <br><br>

	<?php

		$cidade = "Pacatuba";
		$estado = "CE - Brasil";
		$idade  = 146;

		$frase_capital = "A cidade de $cidade é a capital do $estado";
		echo $frase_capital;

	?>

</body>
</html>