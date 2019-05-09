<?php 

	$nome = isset($_POST['nome']) ? $_POST['nome'] : "";

	// echo "Seu nome é $nome";
	
 ?>
<br>
 Seu nome é <input type="text" name="" value="<?php echo $nome ?>">