<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Número de caracteres</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container py-3">

<h1>Número de caracteres</h1>

<form method="post">

    <div class="mb-3">
        <label for="palavra" class="form-label">Digite uma palavra:</label>
        <input type="text" id="palavra" name="palavra" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>

<?php
    if($_POST){
        $palavra = $_POST['palavra'];

        $qtd = strlen($palavra);

        echo "<p>Quantidade de caracteres: $qtd</p>";
    }
?>

</form>

</div>
</body>
</html>
