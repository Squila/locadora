<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-filme.php");?>
<?php  
	$filmes = listaFilmes($conexao);
?>
	<h1>Listagem de Filmes</h1>
	<?php
		if(array_key_exists("removido", $_GET) && $_GET["removido"] == 'true'){
			?>
			<p class="alert alert-success">Filme removido com sucesso!</p>
			<?php
		}


	?>
	<table class="table table-striped table-bordered mt-5">
		<tr>
			<td><b>ID</b></td>
			<td><b>Titulo</b></td>
			<td><b>Preço</b></td>
			<td><b>Descrição</b></td>
			<td><b>Género</b></td>
			<td><b>Situação</b></td>
			<td><b>Remover</b></td>
			<td><b>Editar</b></td>
		</tr>
<?php
	foreach($filmes as $filme){
		?>
		<tr>
			<td><?php echo $filme["id"];?></td>
			<td><?php echo /*utf8_encode(*/ $filme["titulo"]/*)*/;?></td>
			<td><?php echo "R$ ".$filme["preco"];?></td>
			<td><?php echo substr(/*utf8_encode(*/$filme["sinopse"]/*)*/, 0, 20);?></td>
			<td><?php echo /*utf8_encode(*/$filme["genero_nome"]/*)*/;?></td>

			<td><?php if($filme["alugado"] == 1) echo "Alugado";else echo "Disponivel";?></td>
			<td>
				<form action="remove-filme.php" method="post">
					<input type="hidden" name="id" value="<?php echo $filme["id"];?>">
					<button class="btn btn-danger" >remover</button>
				</form>
				
			</td>
			<td>
				<a href="filme-altera-formulario.php?id=<?php echo $filme["id"];?>" class="btn btn-info">alterar</a>
			</td>
		</tr>
		<?php
	}
	?>
	</table>
<?php include("rodape.php");?>	