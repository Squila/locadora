<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-genero.php");?>

<?php
	$generos = listaGenero($conexao);
?>
<h1>Formulário de Cadastro</h1>
	<form name="filmes" action="adiciona-filme.php" method="post">
		<div class="row mt-3">
			<div class="col-md-6">
				Titulo: 
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="titulo">
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-6">
				Preço:
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="preco">
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-6">
				Sinopse:
			</div>
			<div class="col-md-6">
				<textarea name="sinopse" class="form-control"></textarea>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-6">
				Género:
			</div>
			<div class="col-md-6">
				
				<select class="form-control" name="genero_id">
					<?php 
					foreach($generos as $genero){

				?>
					<option value="<?php echo $genero["id"];?>"><?php echo utf8_encode($genero["nome"]);?></option>
					<?php
					
				}
				?>
				</select>
				
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-6">
				
			</div>
			<div class="col-md-6">
				<input class="form-control" type="checkbox" name="alugado" value="true"> Alugado
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-12">
				<input class="btn btn-primary" type="submit" name="" value="Cadastrar">
			</div>
		</div>
		
		
	</form>
<?php include("rodape.php");?>	