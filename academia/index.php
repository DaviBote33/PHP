
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Academia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <header class="bg-white shadow-sm py-4 mb-5">
        <div class="container">
            <h2 class="fw-bold text-primary mb-1">Sistema de Gerenciamento de Academia</h2>
            <p class="text-secondary mb-0">Painel de gerenciamento</p>
        </div>
    </header>

    <main class="container">

        <div class="mb-4">
            <h4 class="fw-bold">Bem-vindo!</h4>
            <p class="text-secondary">Selecione uma opção para continuar.</p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-body p-4">
                        <h3 class="text-primary fw-bold mb-3">Alunos</h3>
                        <p class="text-secondary">Gerencie os alunos cadastrados na academia.</p>

                        <hr>

                        <a href="Aluno/cadastro_aluno.php" class="btn btn-primary w-100 mb-2">
                            Cadastrar aluno
                        </a>

                        <a href="Aluno/consulta_aluno.php" class="btn btn-outline-primary w-100">
                            Consultar alunos
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-body p-4">
                        <h3 class="text-success fw-bold mb-3">Professores</h3>
                        <p class="text-secondary">Gerencie os professores da academia.</p>

                        <hr>

                        <a href="Professor/cadastro_professor.php" class="btn btn-success w-100 mb-2">
                            Cadastrar professor
                        </a>

                        <a href="Professor/consulta_professor.php" class="btn btn-outline-success w-100">
                            Consultar professores
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <div class="card-body p-4">
                        <h3 class="text-info fw-bold mb-3">Instrutores</h3>
                        <p class="text-secondary">Gerencie os instrutores da academia.</p>

                        <hr>

                        <a href="Instrutor/cadastro_instrutor.php" class="btn btn-info text-white w-100 mb-2">
                            Cadastrar instrutor
                        </a>

                        <a href="Instrutor/consulta_instrutor.php" class="btn btn-outline-info w-100">
                            Consultar instrutores
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
