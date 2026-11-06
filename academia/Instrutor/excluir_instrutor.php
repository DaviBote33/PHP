<?php
    require_once("../conexao.php");

    if (isset($_GET["id"])) {
        $id = (int) $_GET["id"];
        $sql = "DELETE FROM instrutores WHERE id = :id";
        $resultado = $con->prepare($sql);
        $resultado->bindValue(":id", $id);
        $resultado->execute();
    }

    header("Location: consulta_instrutor.php");
    exit;
?>
