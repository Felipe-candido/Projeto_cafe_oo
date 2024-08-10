<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turma do Café - Fatec Araras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
                        <a class="nav-link" href="#" onclick="showInsertForm()">Inserir Participante</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showEditForm()">Editar Participante</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="loadParticipants()">Carregar Participantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="saveParticipants()">Gravar Participantes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>Bem-vindo à Turma do Café</h1>
        <p>Use o menu acima para gerenciar os participantes.</p>
    </div>

    <script>
        function showInsertForm() {
            // Implementar função para exibir formulário de inserção
            alert('Inserir Participante');
        }

        function showEditForm() {
            // Implementar função para exibir formulário de edição
            alert('Editar Participante');
        }

        function loadParticipants() {
            // Implementar função para carregar participantes
            alert('Carregar Participantes');
        }

        function saveParticipants() {
            // Implementar função para gravar participantes
            alert('Gravar Participantes');
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
