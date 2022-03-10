<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-genero.php");?>
<?php

$id = $_GET["id"];
$genero = buscaGenero($conexao, $id);

?>
<h1>Formulário de Alteração</h1>
			<form name="cagorias" action="altera-genero.php" method="post">
		<div class="row mt-3">
			<div class="col-md-6">
				Nome: 
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="nome" value="<?php echo $genero['nome'];?>">
			</div>
		</div>
	
		<input type="hidden" name="id" value="<?php echo $genero['id'];?>">
		<div class="row mt-3">
			<div class="col-md-12">
				<input class="btn btn-primary" type="submit" name="" value="Alterar">
			</div>
		</div>
		
		
	</form>



<?php include("rodape.php");?>