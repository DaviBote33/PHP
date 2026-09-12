<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SOMADOR 5000</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>SOMADOR 5000</h1>
    <form method="post">
        <div class="mb-3">
              <label for="numero1" class="form-label">Insira o valor para o somatório: </label>
              <input type="number" id="numero1" name="numero1" class="form-control" required="">
        </div>
<button type="submit" class="btn btn-primary">Enviar</button>

<?php
    if($_POST){
        $numero1 = $_POST['numero1'];
        $contador = 1;
        $soma = 0;
        while($contador <= $numero1){
            $soma += $contador;
            $contador++;
        }
        echo "<p>O somatório de 1 até $numero1 é: $soma</p>";
    }
?>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>