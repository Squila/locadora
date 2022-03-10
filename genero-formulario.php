<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-genero.php");?>

<?php
	$generos = listaGenero($conexao);
?>
<h1>Formulário de Cadastro</h1>
	<form name="generos" action="adiciona-genero.php" method="post">
		<div class="row mt-3">
			<div class="col-md-6">
				Nome: 
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="nome">
			</div>
				</select>
				
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-6">

		</div>
		<div class="row mt-3">
			<div class="col-md-12">
				<input class="btn btn-primary" type="submit" name="" value="Cadastrar">
			</div>
		</div>
		
		
	</form>
<?php include("rodape.php");?>	