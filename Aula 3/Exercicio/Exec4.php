<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Validação de Data</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container py-3">

<h1>Validação de Data</h1>

<form method="post">

    <div class="mb-3">
        <label for="dia" class="form-label">Digite o dia:</label>
        <input type="number" id="dia" name="dia" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="mes" class="form-label">Digite o mês:</label>
        <input type="number" id="mes" name="mes" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="ano" class="form-label">Digite o ano:</label>
        <input type="number" id="ano" name="ano" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>

<?php
    if($_POST){
        $dia = $_POST['dia'];
        $mes = $_POST['mes'];
        $ano = $_POST['ano'];

        if(checkdate($mes, $dia, $ano)){
            $data = sprintf("%02d/%02d/%04d", $dia, $mes, $ano);

            echo "<p>Data válida: $data</p>";
        }
        else{
            echo "<p>Data inválida.</p>";
        }
    }
?>

</form>

</div>
</body>
</html>

