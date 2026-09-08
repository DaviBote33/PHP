<?php
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $desconto = $valor1 * ($valor2 / 100);
    $valorFinal = $valor1 - $desconto;
    echo "O valor final com desconto é: ".$valorFinal;