<?php
include "incs/valida_sessao.php";
include "incs/topo.html";
?>

<body>
    <?php
    require_once "src/PsicoDAO.php";
    $psico = PsicoDAO::consultarPsico();
    ?>

    <div class="container mt-4">
        <h1>Encontre seu psicólogo</h1>
        <a href="form_psico.php">gostaria de fazer parte da nossa equipe?</a>
    </div>
    <div class="container mt-4">
        <div class="row border p-3 rounded">
            <?php
            foreach ($psico as $p) {
                ?>
                <form action="src/agendar.php" method="POST">
                    <div class="col-2 p-1">
                        <img src="data:image/jpeg;base64,<?= base64_encode($p['imagem']) ?>" width=60%
                            class="rounded-circle" alt="Foto do psicólogo">
                    </div>
                    <div class="col-6">
                        <input type="hidden" name="idpsicologo" value="<?= $p['idpsicologo'] ?>">
                        <h4><?= $p['nome'] ?></h4>
                        <p><?= $p['CRP'] ?></p>
                        <p><?= $p['valor'] ?> | <?= $p['tempo'] ?></p>
                        <p><?= $p['descricao'] ?></p>
                        <div class="d-flex justify-content-between">
                            <div>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-2">
                        <select class="form-select" name="data" aria-label="Default select example">
                            <option selected>Selecione a data disponivel</option>
                            <option value="20/11/2024">20/11/2024</option>
                            <option value="21/11/2024">21/11/2024</option>
                            <option value="23/11/2024">23/11/2024</option>
                        </select>
                    </div>
                    <div class="col-12 mb-2">
                        <select class="form-select" name="horario" aria-label="Default select example">
                            <option selected>Selecione o horario disponivel</option>
                            <option value="08:00">08:00</option>
                            <option value="09:00">09:00</option>
                            <option value="14:00">14:00</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-outline-primary">Agendar</button>
                    </div>

                </form>
                
                <hr class="fw-bold my-5">
                <?php
            }
            ?>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php
include "incs/rodape.html"
    ?>