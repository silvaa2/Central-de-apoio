<body>
    <header>
        <?php
        include "incs/topo.html"
            ?>
    </header>


    <form method="POST" action="src/cadastro.php" class="border rounded w-25 container mt-3">
        <div class="mb-3">
            <br>
            <h3>Fazer Cadastro</h3>
            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">CPF</label>
            <input type="text" name="cpf" class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Telefone</label>
            <input type="text" name="telefone" class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Data de Nascimento</label>
            <input type="date" name="data" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Gênero</label>
            <input type="text" name="genero" class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input type="password" name="senha" class="form-control">
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