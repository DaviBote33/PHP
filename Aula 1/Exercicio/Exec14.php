<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CALCULADOR DE IMC </title>
</head>
<body>
    <h1>Calculadora de IMC</h1>
    <form method="POST" action="../respostas/Resp14.php">
        <label for="peso">Informe o peso (kg):</label>
        <input type="number" id="peso" name="peso" step="0.01">
        <label for="altura">Informe a altura (m):</label>
        <input type="number" id="altura" name="altura" step="0.01">
        <button type="submit">Calcular IMC</button>
    </form>
</body>
</html>