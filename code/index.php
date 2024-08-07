<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cadastro de Funcionario | MedControl</title>
    <link rel="stylesheet" href="./assets/css/login.css">

</head>

<body>
    <nav class="py-3 mb-4 centralized-logo">
        <div class="row text-center">
            <a class="col-12 navbar-brand m-0" href="../index.php">
                <img class="logo" src="./assets/images/logo_cafe.jpg" alt="Logo" class="d-inline-block">
            </a>
            <span class="col-12 mt-2 nav-title-bold">MedControl</span>
        </div>
    </nav>
    <div class="py-7 py-md-10" id="divCadastro">
        <div class="row m-0 justify-content-center">
            <div class="col-7 px-md-4 py-md-4 bg-body-tertiary shadow-button">
                <div class="text-center p-2">
                    <span class="titulo-login">Cadastro de novos membros</span>
                </div>
                <form class="row" action="cadastrar.php" method="post">
                    <div class="mb-3 col-md-6">
                        <label for="nome" class="form-label">Nome: </label>
                        <input type="text" name="nome" class="form-control" id="nome" required>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="semestre" class="form-label">Semestre: </label>
                        <input type="text" name="semestre" class="form-control" id="semestre" required>
                    </div>
                    <div class="form-check">
                        <label for="curso">Curso: </label><br>
                        <input class="form-check-input" type="radio" name="curso" id="DSM" value="1" required>
                        <label class="form-check-label" for="DSM">DSM
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="curso" id="GE" value="2" required>
                        <label class="form-check-label" for="GE">GE
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="curso" id="SI" value="3" required>
                        <label class="form-check-label" for="SI">SI
                        </label>
                        <br><br>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="ano" class="form-label">Ano de ingresso: </label>
                        <input type="text" name="ano" class="form-control" id="ano" required>
                    </div>
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>