<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turma do Café - Fatec Araras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .form_editar{
            display: block;
        }
    </style>
</head>
<body>

    
    <div class="form_editar">
        <div class="container mt-4">
            <div class="py-7 py-md-10" id="divCadastro">
                <div class="row m-0 justify-content-center">
                    <div class="col-7 px-md-4 py-md-4 bg-body-tertiary shadow-button">
                        <div class="text-center p-2">
                            <span class="titulo-login">Editar membro</span>
                        </div>
                        <form class="row" action="editar.php" id="editar_membros3" method="post">
                            <div class="mb-3 col-md-6">
                                <label for="nome" class="form-label">Nome: </label>
                                <input type="text" name="nome_editar" class="form-control" id="nome_editar" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="semestre" class="form-label">Semestre: </label>
                                <input type="text" name="semestre_editar" class="form-control" id="semestre_editar" required>
                            </div>
                            <div class="form-check">
                                <label for="curso">Curso: </label><br>
                                <input class="form-check-input" type="radio" name="curso" id="DSM_editar" value="1" required>
                                <label class="form-check-label" for="DSM">DSM
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="curso" id="GE_editar" value="2" required>
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
                                <input type="text" name="ano_editar" class="form-control" id="ano_editar" required>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" id="editar3" class="btn btn-primary">Editar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../assets/scripts/javascript.js"></script>
</body>

<?php
require_once ('../classes/class-membro.php');
require_once ('../classes/class_connection.php');
require_once ('../classes/class-crud.php');

echo $_POST['id_editar'];
echo $_POST['nome'];


if (isset($_POST['id_editar'])) {
   
    $id_editar = $_POST['id_editar'];

    if (isset($_POST['nome']) && isset($_POST['semestre']) && isset ($_POST['curso']) && isset($_POST['ano'])){
        $novo_nome = $_POST['nome'];
        $novo_semestre = $_POST['semestre'];
        $novo_curso = $_POST['curso'];
        $novo_ano = $_POST['ano'];

        $connection = new db_query;
        $editar = $connection()->editar_membro($id_editar, $novo_nome, $novo_semestre, $novo_curso, $novo_ano);
        }
}
?>
</html>





