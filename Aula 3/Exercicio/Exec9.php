<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tratamento de Espaços</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container py-3">

<h1>Tratamento de Espaços</h1>

<form method="post">

    <div class="mb-3">
        <label for="frase" class="form-label">Digite uma frase:</label>
        <input type="text" id="frase" name="frase" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>

<?php
    if($_POST){
        $frase = $_POST['frase'];

        $semEspacosInicioFim = trim($frase);
        $semEspacos = str_replace(" ", "", $frase);

        echo "<p>Frase original: $frase</p>";
        echo "<p>Sem espaços no início e no final: $semEspacosInicioFim</p>";
        echo "<p>Todos os espaços removidos: $semEspacos</p>";
    }
?>

</form>

</div>
</body>
</html>

