<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-genero.php");?>
<?php
$id = $_POST["id"];
removeGenero($conexao, $id);
header("Location: genero-lista.php?removido=true");
?>

<?php include("rodape.php");?>	