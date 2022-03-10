<?php
function listaGenero($conexao){
		$generos = array();
		//conexao, query
	$resultado = mysqli_query($conexao, "select * from generos");
	while($genero = mysqli_fetch_assoc($resultado)){
		array_push($generos, $genero);
		}
		return $generos;
	}
function insereGenero($conexao, $nome){
	$query = "insert into generos (nome) values ('{$nome}')";
	$resultadoDaInsercao = mysqli_query($conexao, $query);
	return $resultadoDaInsercao;
}

function removeGenero($conexao, $id){
	$query = "delete from generos where id = {$id}";
	return mysqli_query($conexao, $query);
}

function buscaGenero($conexao, $id){
	$query = "select * from generos where id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function alteraGenero($conexao, $id, $nome){
	$query = "update generos set nome = '{$nome}' where id = '{$id}'";
	return mysqli_query($conexao, $query);
}

?>