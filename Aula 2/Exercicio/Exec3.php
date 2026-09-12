<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CALCULADOR DE DESCONTO</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>CALCULADOR DE DESCONTO</h1>
    <form method="post">
        <div class="mb-3">
              <label for="numero1" class="form-label">Insira o valor do produto:</label>
              <input type="number" id="numero1" name="numero1" class="form-control" required="">
        </div>
<button type="submit" class="btn btn-primary">Enviar</button>

<?php
    if($_POST){
        $numero1 = $_POST['numero1'];
        if($numero1 >= 100){
            $desconto = $numero1 * 0.15;
            $valorFinal = $numero1 - $desconto;
            echo "<p>O valor do produto é: $numero1</p>";
            echo "<p>O desconto aplicado é de: $desconto</p>";
            echo "<p>O valor final é: $valorFinal</p>";
        }
        else{
            echo "<p> Desconto não disponível: $numero1</p>";
        }
    }
?>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>