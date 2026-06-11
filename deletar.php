<?php

$id = $_GET['id'];

include "inc-conexao.php";
$sql = "DELETE FROM tb_produtos WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);
echo "excluido com sucesso!";
mysqli_close($conexao);

?>