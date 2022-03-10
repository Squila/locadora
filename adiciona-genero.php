<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-genero.php");?>
<?php

	$nome = $_POST["nome"];
	//(conexao, query)
	if(insereGenero($conexao, $nome)){
		?>
		<p class="alert alert-success">
	Genero <?php echo $nome;?> adicionado com sucesso!
		</p>
		<?php
	}else{
		?>
		<p class="alert alert-danger">
	Genero <?php echo $nome;?> não foi adicionado!
		</p>
		<?php
	}
	//fechar conexao
	mysqli_close($conexao);

?>

<?php include("rodape.php");?>	