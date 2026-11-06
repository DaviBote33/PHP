<?php
    $str = "mysql:host=localhost;dbname=academia;charset=utf8";
    $user = "root";
    $pwd = "";

    try {
        $con = new PDO($str, $user, $pwd);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        die("Não foi possível fazer a conexão com o banco de dados!");
    }
