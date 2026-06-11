<?php
include 'inc-cabecalho.php';
?>
    <main>
        <div class="container">
            <div class="card">
                <form method="post" action="salvar.php" class="card-body">
                    nome: <input name="nome" class="form-control"><br>
                    quantidade: <input type="number" name="quantidade" class="form-control"><br>
                    preço: <input  name="preco" class="form-control" required><br>
                    <button type="submit" class="btn btn-secondary btn-sm">Salvar</button>
                    <button type="reset" class="btn btn-secondary btn-sm">Limpar</button>
                </form>
            </div>
        </div>
    </main>
    
<?php
include 'inc-rodape.php';
?>
