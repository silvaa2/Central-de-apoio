<body>
    <header>
        <?php
        include "incs/topo.html"
            ?>
    </header>


    <form method="POST" action="src/cadastro_datas.php" class="border rounded w-25 container mt-3">
        <div class="mb-3">
            <br>
            <h3>Cadastro datas</h3>
            <label class="form-label">Psicologo</label>
            <input type="text" name="psicologo" class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">data</label>
            <input type="text" name="data" class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">horario</label>
            <input type="text" name="horario" class="form-control">
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