<?php
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $imc = $valor1 / ($valor2 * $valor2);
    echo "O IMC é: ".$imc;