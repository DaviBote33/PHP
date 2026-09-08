<?php   
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $valor3 = $_POST['valor3'];
    $juroscomposto = $valor1 * pow((1 + $valor2), $valor3);
    echo "O valor do juros composto é: ".$juroscomposto;
    