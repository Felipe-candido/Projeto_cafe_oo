<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turma do Café - Fatec Araras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .forms{
        display: none;  
        }

        .membros{
            display: none;
        }

        .editar{
            display: none;
        }

        .form_editar{
            display: none;
        }

        .home{
            display: block;
        }
    </style>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Turma do Café</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="forms_membros">Inserir Participante</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="carregar_membros">Carregar Membros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="editar_membro">Editar Participante</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="home">
        
        <!-- Banner -->
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Bem-vindo à Comunidade do Café</h1>
                <p class="lead text-muted">Explore, compartilhe e conecte-se com outros amantes de café.</p>
                <a href="#" class="btn btn-primary my-2">Conheça Mais</a>
                <a href="#" class="btn btn-secondary my-2">Entre em Contato</a>
            </div>
        </section>
        
        <!-- Seção Sobre -->
        <section class="container my-5">
            <div class="row">
                <div class="col-md-6">
                    <h2>Sobre Nós</h2>
                    <p>A Comunidade do Café é o lugar perfeito para quem ama café. Aqui, você pode compartilhar experiências, aprender sobre diferentes tipos de café, e fazer parte de um grupo apaixonado por essa bebida.</p>
                    <a href="#" class="btn btn-outline-primary">Saiba Mais</a>
                </div>
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/500" class="img-fluid" alt="Café">
                </div>
            </div>
        </section>

        <!-- Rodapé -->
        <footer class="text-muted py-4 bg-dark text-white-50">
            <div class="container text-center">
                <p>&copy; 2024 Comunidade do Café. Todos os direitos reservados.</p>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#" class="text-white">Privacidade</a></li>
                    <li class="list-inline-item"><a href="#" class="text-white">Termos</a></li>
                    <li class="list-inline-item"><a href="#" class="text-white">Contato</a></li>
                </ul>
            </div>
        </footer>
    </div>


    <!-- FORMULÁRIO PARA CADASTRO DE MEMBROS -->
    <div class="forms">
        <div class="container mt-4">
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
        </div>
    </div>


    <!-- INTERFACE PARA EXIBIR OS MEMBROS CADASTRADOS -->
    <div class="membros">
        <div class="container mt-5">
            <h1 class="text-center">Membros Registrados</h1>
            <table class="table table-striped mt-4">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Semestre</th>
                        <th scope="col">Curso</th>
                        <th scope="col">Ano de Ingresso</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once ('../classes/class-membro.php');
                    require_once ('../classes/class_connection.php');
                    require_once ('../classes/class-crud.php');

                    $query = new db_query;
                    $max = $query->select_id();
                    $id1 = 1;

                    while ($id1 <= $max['id']){
                        $membro = $query->exibir_participantes($id1);
                        if ($membro !== false && is_array($membro)) {
                            echo '<tr>';
                                echo '<td>'. $membro['id']. '</td>';
                                echo '<td>'. $membro['nome']. '</td>';
                                echo '<td>'. $membro['semestre']. '</td>';
                                echo '<td>'. $membro['curso']. '</td>';
                                echo '<td>'. $membro['ano']. '</td>';
                            echo '<tr>';
                        } else {
                            // Lidar com o erro, como exibir uma mensagem ou pular para o próximo item
                            echo '<tr><td colspan="5">Nenhum dado encontrado ou erro na consulta.</td></tr>';
                        }
                        $id1 = $id1 + 1;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>


    <!-- INTERFACE PARA SELECIONAR O MEMBRO A SER EDITADO PELO ID -->
    <div class="editar">
        <div class="container mt-4">
            <div class="py-7 py-md-10" id="divCadastro">
                <div class="row m-0 justify-content-center">
                    <div class="col-7 px-md-4 py-md-4 bg-body-tertiary shadow-button">
                        <div class="text-center p-2">
                            <span class="titulo-login">Editar participante</span>
                        </div>
                        <form class="row" action="editar.php" id="editar_membros2" method="post">
                            <div class="mb-3 col-md-6">
                                <label for="id_editar" class="form-label">Digite o id do membro </label>
                                <input type="text" name="id_editar" class="form-control" id="id_editar" required>
                            </div>
                            
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary" id="editar2">Editar</button>
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
</html>
