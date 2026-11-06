<?php
    require_once("../conexao.php");
    $sql = "SELECT * FROM instrutores ORDER BY nome";
    $resultado = $con->query($sql);
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consulta de Instrutors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="card shadow-sm border-0 rounded-3">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="fw-bold text-primary mb-0">Consulta de Instrutors</h2>
                    <div>
                        <a href="cadastro_instrutor.php" class="btn btn-primary btn-sm">Novo cadastro</a>
                        <a href="../index.php" class="btn btn-outline-secondary btn-sm">Voltar</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle">
                        <thead><tr><th>ID</th><th>Nome</th><th>CPF</th><th>Telefone</th><th>E-mail</th><th>Registro profissional</th><th>Ação</th></tr></thead>
                        <tbody>
                            <?php while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>
                                <tr>
                                    <td><?= $registro["id"] ?></td>
                                    <td><?= htmlspecialchars($registro["nome"]) ?></td><td><?= htmlspecialchars($registro["cpf"]) ?></td><td><?= htmlspecialchars($registro["telefone"]) ?></td><td><?= htmlspecialchars($registro["email"]) ?></td><td><?= htmlspecialchars($registro["registro_profissional"]) ?></td>
                                    <td>
                                        <a href="excluir_instrutor.php?id=<?= $registro["id"] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Deseja realmente excluir este cadastro?')">Excluir</a>
                                    </td>
                                </tr>
                            <?php } ?>
                            <?php if ($resultado->rowCount() == 0) { ?>
                                <tr><td colspan="7" class="text-center text-secondary">Nenhum cadastro encontrado.</td></tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
