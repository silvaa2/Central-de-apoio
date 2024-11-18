
<body>
<header>
        <?php
        include "incs/topo.html"
        ?>
    </header>
    <br><br>

    <form method="POST" action="efetuarLogin.php" class="border rounded w-25 container mt-3">
            <div class="mb-3">
                <br>
                <h3>Fazer Login</h3>
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control">
            </div>
            

            <div class="position-relative">
            <a href="form_cadastro.php">Criar conta</a>
            <br>
            <a href="recuperar-senha.php">Esqueceu a senha?</a>
            <button type="submit" class="btn btn-primary position-absolute top-0 end-0">Logar</button>
            </div>
            <br><br>
    </form>
</body>
<br><br><br>

<?php
include "incs/rodape.html"
?>