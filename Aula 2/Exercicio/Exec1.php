<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SOMADOR 3000</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
    <h1>SOMADOR 3000</h1>
        <form method="post">
            <div class="mb-3">
              <label for="numero1" class="form-label">Insira o primeiro número</label>
                <input type="number" id="numero1" name="numero1" class="form-control" required="">
            </div>
            
            <div class="mb-3">
              <label for="numero2" class="form-label">Insira o segundo número:</label>
                <input type="number" id="numero2" name="numero2" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
<?php
    if($_POST){
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $soma = $numero1 + $numero2;
        echo "<p>A soma de $numero1 e $numero2 é: $soma</p>";
        if($numero1 == $numero2 ){
            $triplo = ($numero1 + $numero2) * 3;
            echo "<p>Como os números são iguais, o triplo da soma é: $triplo</p>";
        }
    }
?>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>