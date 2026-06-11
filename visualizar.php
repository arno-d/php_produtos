<?php

$id = $_GET['id'];
include "inc-cabecalho.php";
include "inc-conexao.php";

$nome = $quantidade = $preco = "";

$sql = "SELECT * FROM tb_produtos WHERE id= $id";
$resultado = mysqli_query($conexao, $sql);
while($linha = mysqli_fetch_assoc($resultado)){
    $nome = $linha ['nome'];
    $quantidade = $linha ['quantidade'];
    $preco = $linha ['preco'];
}
mysqli_close($conexao);

?>
<main>
    <h1>Produto #<?=  $id  ?></h1>
    Código: <?= $id ?> <br>
    Nome: <?= $nome ?> <br>
    Quantidade: <?= $quantidade ?> <br>
    Preço: <?= $preco ?> <br>
</main>
<?php
include "inc-rodape.php"
?>