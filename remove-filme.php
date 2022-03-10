<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-filme.php");?>
<?php
$id = $_POST["id"];
removeFilme($conexao, $id);
header("Location: filme-lista.php?removido=true");
?>

<?php include("rodape.php");?>	