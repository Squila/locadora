<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-genero.php");?>
<?php
 	$id = $_POST["id"];
	$nome = $_POST["nome"];
	
	if(alteraGenero($conexao, $id, $nome)){
		?>
		<p class="alert alert-success">
	Genero <?php echo $nome;?> alterado com sucesso!
		</p>
		<?php
	}else{
		?>
		<p class="alert alert-danger">
	Genero <?php echo $nome;?> não foi alterado!
		</p>
		<?php
	}
	//fechar conexao
	mysqli_close($conexao);

?>
<?php include("rodape.php");?>