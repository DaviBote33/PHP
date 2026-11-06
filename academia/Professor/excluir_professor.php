<?php
    require_once("../conexao.php");

    if (isset($_GET["id"])) {
        $id = (int) $_GET["id"];
        $sql = "DELETE FROM professores WHERE id = :id";
        $resultado = $con->prepare($sql);
        $resultado->bindValue(":id", $id);
        $resultado->execute();
    }

    header("Location: consulta_professor.php");
    exit;
?>
