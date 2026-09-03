<?php
    $valor1 =$_POST["valor1"];
    $celcius = ($valor1 -32) * 5/9;
    echo "A temperatura em Celcius é:". $celcius;
