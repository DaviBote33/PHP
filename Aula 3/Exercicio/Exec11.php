<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Moeda Brasileira</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container py-3">

<h1>Moeda Brasileira</h1>

<form method="post">

    <div class="mb-3">
        <label for="valor" class="form-label">Digite um valor:</label>
        <input type="number" step="any" id="valor" name="valor" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>

<?php
    if($_POST){
        $valor = $_POST['valor'];

        $valorFormatado = number_format($valor, 2, ",", ".");

        echo "<p>Valor: R$ $valorFormatado</p>";
    }
?>

</form>

</div>
</body>
</html>

