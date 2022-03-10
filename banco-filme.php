<?php
function listaFilmes($conexao){
		$filmes = array();
		//conexao, query
	$resultado = mysqli_query($conexao, "select p.*,c.nome as genero_nome from filmes as p join generos as c on c.id = p.genero_id");
	while($filme = mysqli_fetch_assoc($resultado)){
		array_push($filmes, $filme);
		}
		return $filmes;
	}

function insereFilmes($conexao, $titulo, $preco, $sinopse, $genero_id, $alugado){
	$query = "insert into filmes (titulo, preco, sinopse, genero_id, alugado) values ('{$titulo}', {$preco}, '{$sinopse}', {$genero_id}, {$alugado})";

	$resultadoDaInsercao = mysqli_query($conexao, $query);
	return $resultadoDaInsercao;
}

function removeFilme($conexao, $id){
	$query = "delete from filmes where id = {$id}";
	return mysqli_query($conexao, $query);
}

function buscaFilme($conexao, $id){
	$query = "select * from filmes where id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function alteraFilme($conexao, $id, $titulo, $preco, $sinopse, $genero_id, $alugado){
	$query = "update filmes set titulo = '{$titulo}', preco = {$preco}, sinopse = '{$sinopse}', genero_id = {$genero_id}, alugado = {$alugado} where id = '{$id}'";
	return mysqli_query($conexao, $query);
}

?>