<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Palavras da Frase</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container py-3">

<h1>Palavras da Frase</h1>

<form method="post">

    <div class="mb-3">
        <label for="frase" class="form-label">Digite uma frase:</label>
        <input type="text" id="frase" name="frase" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>

<?php
    if($_POST){
        $frase = trim($_POST['frase']);

        $palavras = explode(" ", $frase);

        $total = count($palavras);

        $maior = "";

        foreach($palavras as $palavra){
            if(strlen($palavra) > strlen($maior)){
                $maior = $palavra;
            }
        }

        echo "<p>Total de palavras: $total</p>";
        echo "<p>Maior palavra: $maior</p>";
    }
?>

</form>

</div>
</body>
</html>

