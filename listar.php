<?php

include "inc-cabecalho.php";
include "inc-conexao.php";

?>

<main>  
    <h1>Listagem de produtos</h1>
    <a href="form-cadastrar.php">Novo Produto</a>
    <table border="2">
        <tr>
            <th>Nodigo</th>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Preco</th>
            <th>Açoes</th>
        </tr>
    <?php
    $sql = "SELECT * FROM tb_produtos";
    $resultado = mysqli_query($conexao, $sql);
    while($linha = mysqli_fetch_assoc($resultado)){
        echo "<tr>";
        echo "<td>{$linha['id']}";
        echo "<td>{$linha['nome']}";
        echo "<td>{$linha['quantidade']}";
        echo "<td>{$linha['preco']}";
        echo "<td> 
        
        <a href='deletar.php?id={$linha['id']}'> Deletar </a> 
        <a href='visualizar.php?id={$linha['id']}'> Visualizar </a>

        </td>";
        echo "</tr>";
    }
    mysqli_close($conexao);
    ?>    
</main>