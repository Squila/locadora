<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-filme.php");?>
<?php
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


	//(conexao, query)
	if(insereFilmes($conexao, $titulo, $preco, $sinopse, $genero_id, $alugado)){
		?>
		<p class="alert alert-success">
	Filme <?php echo $titulo;?>, R$ <?php echo $preco;?> adicionado com sucesso!
		</p>
		<?php
	}else{
		?>
		<p class="alert alert-danger">
	Filme <?php echo $titulo;?>, R$ <?php echo $preco;?> não foi adicionado!
		</p>
		<?php
	}
	//fechar conexao
	mysqli_close($conexao);

?>

<?php include("rodape.php");?>	