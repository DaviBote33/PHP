<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Iniciais do Nome</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container py-3">

<h1>Iniciais do Nome</h1>

<form method="post">

    <div class="mb-3">
        <label for="nome" class="form-label">Digite seu nome completo:</label>
        <input type="text" id="nome" name="nome" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>

<?php
    if($_POST){
        $nome = trim($_POST['nome']);

        $palavras = explode(" ", $nome);

        $iniciais = "";

        foreach($palavras as $palavra){
            if($palavra != ""){
                $iniciais = $iniciais . strtoupper($palavra[0]) . ".";
            }
        }

        echo "<p>Iniciais: $iniciais</p>";
    }
?>

</form>

</div>
</body>
</html>

