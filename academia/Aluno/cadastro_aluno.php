<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-sm border-0 rounded-3">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h2 class="card-title fw-bold text-primary mb-0">Cadastro de Aluno</h2>
                            <a href="../index.php" class="btn btn-outline-secondary btn-sm">Voltar</a>
                        </div>
                        <form method="post">
                            <div class="mb-3">
                                <label for="nome" class="form-label fw-semibold">Nome</label>
                                <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o nome completo" required>
                            </div>
                            <div class="mb-3">
                                <label for="cpf" class="form-label fw-semibold">CPF</label>
                                <input type="text" id="cpf" name="cpf" class="form-control" placeholder="000.000.000-00" required>
                            </div>
                            <div class="mb-3">
                                <label for="telefone" class="form-label fw-semibold">Telefone</label>
                                <input type="text" id="telefone" name="telefone" class="form-control" placeholder="(00) 00000-0000" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold">E-mail</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="nome@exemplo.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="data_nascimento" class="form-label fw-semibold">Data de nascimento</label>
                                <input type="date" id="data_nascimento" name="data_nascimento" class="form-control" placeholder="" required>
                            </div>
                            <div class="mb-3">
                                <label for="plano" class="form-label fw-semibold">Plano</label>
                                <select id="plano" name="plano" class="form-select" required>
                                    <option value="">Selecione o plano</option>
                                    <option value="Mensal">Mensal</option>
                                    <option value="Trimestral">Trimestral</option>
                                    <option value="Semestral">Semestral</option>
                                    <option value="Anual">Anual</option>
                                </select>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg fw-semibold">Salvar Cadastro</button>
                            </div>
                        </form>
                        <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                                    $nome = $_POST["nome"];
                                                                    $cpf = $_POST["cpf"];
                                                                    $telefone = $_POST["telefone"];
                                                                    $email = $_POST["email"];
                                                                    $data_nascimento = $_POST["data_nascimento"];
                                                                    $plano = $_POST["plano"];
                                require_once("../conexao.php");
                                $sql = "INSERT INTO alunos (nome, cpf, telefone, email, data_nascimento, plano) VALUES (:nome, :cpf, :telefone, :email, :data_nascimento, :plano)";
                                $resultado = $con->prepare($sql);
                                    $resultado->bindValue(":nome", $nome);
                                    $resultado->bindValue(":cpf", $cpf);
                                    $resultado->bindValue(":telefone", $telefone);
                                    $resultado->bindValue(":email", $email);
                                    $resultado->bindValue(":data_nascimento", $data_nascimento);
                                    $resultado->bindValue(":plano", $plano);
                                if ($resultado->execute())
                                    echo '<div class="alert alert-success mt-3"> Aluno inserido(a) com sucesso!</div>';
                                else
                                    echo '<div class="alert alert-danger mt-3">Erro ao inserir aluno!</div>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
