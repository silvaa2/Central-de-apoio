<body>
    <header>
        <?php
        include "incs/topo.html";
        include "incs/valida_sessao.php";
        ?>
    </header>
    <form method="POST" enctype="multipart/form-data" action="src/cadastro_psico.php" class="border rounded w-25 container mt-3">
        <div class="mb-3">
            <br>
            <h3>Cadastro de psicólogo</h3>
            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">CRP</label>
            <input type="text" name="crp" class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Valor</label>
            <input type="text" name="valor" class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tempo</label>
            <input type="text" name="tempo" class="form-control">
        </div>
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Imagem</label>
            <input type="file" name="imagem" class="form-control">
        </div>
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Descrição</label>
        <textarea name="descricao" rows="7" class="form-control"></textarea>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>

        <br>
    </form>


</body>
<?php
include "incs/rodape.html"
?>