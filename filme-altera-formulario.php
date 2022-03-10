<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-genero.php");?>
<?php include("banco-filme.php");?>
<?php

$id = $_GET["id"];
$filme = buscaFilme($conexao, $id);
$generos = listagenero($conexao);
$alugado = $filme["alugado"] ? "checked=checked" : "";
// if($alugado == 1) echo "checked=checked";else echo "";

?>
<h1>Formulário de Alteração</h1>
	<form name="filmes" action="altera-filme.php" method="post">
		<div class="row mt-3">
			<div class="col-md-6">
				Titulo: 
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="titulo" value="<?php echo $filme['titulo'];?>">
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-6">
				Preço:
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="preco" value="<?php echo $filme['preco'];?>">
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-6">
				Sinopse:
			</div>
			<div class="col-md-6">
				<textarea name="sinopse" class="form-control"><?php echo utf8_encode($filme['sinopse']);?></textarea>
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
						$genero_selecionada = $filme['genero_id'] == $genero['id'];
						$selecao = $genero_selecionada ? "selected=selected" : "";
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
				<input class="form-control" type="checkbox" name="alugado" <?php echo $alugado;?> value="true"> Alugado
			</div>
		</div>
		<input type="hidden" name="id" value="<?php echo $filme['id'];?>">
		<div class="row mt-3">
			<div class="col-md-12">
				<input class="btn btn-primary" type="submit" name="" value="Alterar">
			</div>
		</div>
		
		
	</form>



<?php include("rodape.php");?>