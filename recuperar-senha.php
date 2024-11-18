<body>
    <header>
        <?php
        include "incs/topo.html"
            ?>
    </header>
<br><br><br>
    <form method="POST" action="" class="border rounded w-25 container mt-3">
        <div class="mb-3">
            <br>
            <h3>Digite seu email para recuperar sua senha</h3>
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control">
        </div>


        <div class="position-relative">
            <a href="login.php">Cancelar</a>
            <br>

            <button type="submit" class="btn btn-primary position-absolute top-0 end-0">Recuperar</button>
        </div>
        <br><br>
    </form>

</body>
<br><br><br><br><br>


<?php
include "incs/rodape.html"
    ?>