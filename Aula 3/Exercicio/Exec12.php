<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Senha Aleatória</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container py-3">

<h1>Senha Aleatória</h1>

<form method="post">

    <button type="submit" class="btn btn-primary">Gerar senha</button>

<?php
    if($_POST){
        $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

        $senha = substr(str_shuffle($caracteres), 0, 8);

        echo "<p>Senha gerada: $senha</p>";
    }
?>

</form>

</div>
</body>
</html>

