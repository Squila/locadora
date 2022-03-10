<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-genero.php");?>
<?php  

	$genero = listaGenero($conexao);
?>
	<h1>Listagem de Generos</h1>
	<?php
		if(array_key_exists("removido", $_GET) && $_GET["removido"] == 'true'){
			?>
			<p class="alert alert-success">Genero removido com sucesso!</p>
			<?php
		}


	?>
	<table class="table table-striped table-bordered mt-5">
		<tr>
			<td><b>ID</b></td>
			<td><b>Nome</b></td>
			<td><b>Remover</b></td>
			<td><b>Editar</b></td>
		</tr>
<?php
	foreach($genero as $generos){
		?>
		<tr>
			<td><?php echo $generos["id"];?></td>
			<td><?php echo /*utf8_encode(*/$generos["nome"]/*)*/;?></td>
			<td>
				<form action="remove-genero.php" method="post">
					<input type="hidden" name="id" value="<?php echo $generos["id"];?>">
					<button class="btn btn-danger" >remover</button>
				</form>
				
			</td>
			<td>
				<a href="genero-altera-formulario.php?id=<?php echo $generos["id"];?>" class="btn btn-info">alterar</a>
			</td>
		</tr>
		<?php
	}
	?>
	</table>
<?php include("rodape.php");?>	