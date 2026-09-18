<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Quantidade de Vogais</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container py-3">

<h1>Quantidade de Vogais</h1>

<form method="post">

    <div class="mb-3">
        <label for="frase" class="form-label">Digite uma frase:</label>
        <input type="text" id="frase" name="frase" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>

<?php
    if($_POST){
        $frase = strtolower($_POST['frase']);

        $a = substr_count($frase, "a");
        $e = substr_count($frase, "e");
        $i = substr_count($frase, "i");
        $o = substr_count($frase, "o");
        $u = substr_count($frase, "u");

        $total = $a + $e + $i + $o + $u;

        echo "<p>Quantidade de vogais: $total</p>";
    }
?>

</form>

</div>
</body>
</html>

