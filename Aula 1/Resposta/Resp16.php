<?php
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $valor3 = $_POST['valor3'];
    $jurosimples = $valor1 * $valor2 * $valor3;
    echo "O valor do juros simples é: ".$jurosimples;