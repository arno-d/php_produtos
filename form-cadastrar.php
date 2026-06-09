<?php
include 'inc-cabecalho.php';
?>
    <main>
        <form method="post" action="salvar.php">
            nome: <input name="nome"><br>
            quantidade: <input type="number" name="quantidade"><br>
            preço: <input  name="preco" required><br>
            <button type="submit">Salvar</button>
            <button type="reset">Limpar</button>
        </form>
    </main>
<?php
include 'inc-rodape.php';
?>
