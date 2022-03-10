<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-filme.php");?>
<?php
 	$id = $_POST["id"];
	$titulo = $_POST["titulo"];
	$preco = $_POST["preco"];
	$sinopse = $_POST["sinopse"];
	$genero_id = $_POST["genero_id"];
	//$alugado = $_POST["alugado"];
	if(array_key_exists('alugado', $_POST)){
		$alugado = "true";
	}else{
		$alugado = "false";
	}

	if(alteraFilme($conexao, $id, $titulo, $preco, $sinopse, $genero_id, $alugado)){
		?>
		<p class="alert alert-success">
	Filme <?php echo $titulo;?>, R$ <?php echo $preco;?> alterado com sucesso!
		</p>
		<?php
	}else{
		?>
		<p class="alert alert-danger">
	Filme <?php echo $titulo;?>, R$ <?php echo $preco;?> não foi alterado!
		</p>
		<?php
	}
	//fechar conexao
	mysqli_close($conexao);

?>
<?php include("rodape.php");?>