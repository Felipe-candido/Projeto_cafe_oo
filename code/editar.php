<?php
require_once ('../classes/class-membro.php');
require_once ('../classes/class_connection.php');
require_once ('../classes/class-crud.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar membro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

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
                        <form class="row" action="editar.php" method="POST">
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
                            <input type="hidden" name="id_editar" value="<?php echo $_POST['id_editar']; ?>">

                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Editar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

<?php
    require_once ('../classes/class-membro.php');
    require_once ('../classes/class_connection.php');
    require_once ('../classes/class-crud.php');
    

    if (isset($_POST['id_editar'])) {
    
        
        if (isset($_POST['nome_editar']) && isset($_POST['semestre_editar']) && isset ($_POST['curso']) && isset($_POST['ano_editar'])){
            // VALIDAÇÃO DAS OPÇÕES DOS CURSOS
            $aux = $_POST['curso'];
            switch ($aux) {
                case '1':
                    $curso = "DSM";
                    break;
                    
                case '2':
                    $curso = "GE";
                    break;
                        
                        
                case '3':
                    $curso = "SI";
                    break;
                }

            $novo_nome = $_POST['nome_editar'];
            $novo_semestre = $_POST['semestre_editar'];
            $id_editar = $_POST['id_editar'];
            $novo_ano = $_POST['ano_editar'];

            $query = new db_query;
            $query->editar_membro($id_editar, $novo_nome, $novo_semestre, $curso, $novo_ano);
            header('Location: index.php');
            exit();
        }
    }
?>






