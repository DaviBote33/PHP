<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JUROS SIMPLES</title>
</head>
<body>
    <h1> CALCULADOR DE JUROS SIMPLES </h1>
    <form method="POST" action="../Resposta/Resp16.php">
        <label for="valor1"> Informe o valor principal: </label>
        <input type="number" id="valor1" name="valor1">
        <label for="valor2"> Informe a taxa de juros (em %): </label>
        <input type="number" id="valor2" name="valor2">
        <label for="valor3"> Informe o tempo (em anos): </label>
        <input type="number" id="valor3" name="valor3">
        <button type="submit"> CALCULAR JUROS </button>
    </form>
</body>
</html>