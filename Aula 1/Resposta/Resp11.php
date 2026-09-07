<?php  
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $resultado = pow($valor1, $valor2);
    echo "<p>Resultado: $resultado</p>";
?>