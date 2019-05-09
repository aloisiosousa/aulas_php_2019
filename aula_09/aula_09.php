<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Aula de Formulário PHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script type="text/javascript">
		
	</script>
</head>
<body>
<div class="container">

	<?php 

		$nome = isset($_POST['nome']) ? $_POST['nome'] : "";
	?>

	<form name="form" method="POST" action="aula_09.php">

		<label>
			Seu nome: <input type="text" name="nome" placeholder="Digite seu nome">
		</label>

		<label>
			Seu nome é: <input type="text" name="" value="<?php echo $nome ?>">
		</label>
		<br>

		<?php 

			$valor1 = isset($_POST['v1']) ? $_POST['v1'] : "";
			$valor2 = isset($_POST['v2']) ? $_POST['v2'] : "";

			@$result = $valor1 + $valor2; 

		?>

		<h1>Calculadora Soma LTV</h1>

		Valor 1 : <input type="text" name="v1" size="5"> 
		Valor 2 : <input type="text" name="v2" size="5">
		Resultado: <input type="text" name = "result" disabled="" size="5" value="<?php echo $result ?>" > 

		<input type="submit" name="btn" value="vai">

	</form>

</div>
</body>
</html>