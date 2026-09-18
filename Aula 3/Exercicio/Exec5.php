<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Raiz Quadrada</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container py-3">

<h1>Raiz Quadrada</h1>

<form method="post">

    <div class="mb-3">
        <label for="numero" class="form-label">Digite um número:</label>
        <input type="number" id="numero" name="numero" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>

<?php
    if($_POST){
        $numero = $_POST['numero'];

        $raiz = sqrt($numero);

        echo "<p>Raiz quadrada: $raiz</p>";
    }
?>

</form>

</div>
</body>
</html>

