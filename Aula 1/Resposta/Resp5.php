<?php

    $valor1 = $_POST["valor1"];
    $fahrenheit = ($valor1 * 9/5) + 32;
    echo "A temperatura em Fahrenheit é:". $fahrenheit;