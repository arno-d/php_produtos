<?php

$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];

include "inc-conexao.php";
$sql = "INSERT INTO tb_produtos (nome, quantidade, preco) VALUES ('$nome', $quantidade, $preco)";
$resultado = mysqli_query($conexao, $sql);

echo "inserido com sucesso!";
mysqli_close($conexao);
?>