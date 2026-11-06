<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Academia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold text-primary">Sistema de Gerenciamento de Academia</h1>
            <p class="text-secondary">Cadastro e consulta de alunos, professores e instrutores</p>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-md-4">
                <div class="card shadow-sm border-0 rounded-3 h-100">
                    <div class="card-body p-4 text-center">
                        <h3 class="text-primary fw-bold">Alunos</h3>
                        <p class="text-secondary">Gerencie os alunos da academia.</p>
                        <a href="Aluno/cadastro_aluno.php" class="btn btn-primary w-100 mb-2">Cadastrar aluno</a>
                        <a href="Aluno/consulta_aluno.php" class="btn btn-outline-primary w-100">Consultar alunos</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-0 rounded-3 h-100">
                    <div class="card-body p-4 text-center">
                        <h3 class="text-success fw-bold">Professores</h3>
                        <p class="text-secondary">Gerencie os professores da academia.</p>
                        <a href="Professor/cadastro_professor.php" class="btn btn-success w-100 mb-2">Cadastrar professor</a>
                        <a href="Professor/consulta_professor.php" class="btn btn-outline-success w-100">Consultar professores</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-0 rounded-3 h-100">
                    <div class="card-body p-4 text-center">
                        <h3 class="text-info fw-bold">Instrutores</h3>
                        <p class="text-secondary">Gerencie os instrutores da academia.</p>
                        <a href="Instrutor/cadastro_instrutor.php" class="btn btn-info text-white w-100 mb-2">Cadastrar instrutor</a>
                        <a href="Instrutor/consulta_instrutor.php" class="btn btn-outline-info w-100">Consultar instrutores</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
