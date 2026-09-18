<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Domínio do E-mail</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container py-3">

<h1>Domínio do E-mail</h1>

<form method="post">

    <div class="mb-3">
        <label for="email" class="form-label">Digite seu e-mail:</label>
        <input type="email" id="email" name="email" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>

<?php
    if($_POST){
        $email = $_POST['email'];

        $partes = explode("@", $email);

        $dominio = $partes[1];

        echo "<p>Domínio: $dominio</p>";
    }
?>

</form>

</div>
</body>
</html>

