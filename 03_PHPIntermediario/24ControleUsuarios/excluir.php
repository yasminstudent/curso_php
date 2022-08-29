<?php
if (isset($_GET["id"])) {
    require_once("config.php");

    $id = addslashes($_GET["id"]);

    $query = "DELETE FROM usuarios WHERE id = :id";
    $delete = $pdo->prepare($query);
    $delete->bindValue(":id", $id);
    $delete->execute();
}

header("Location: index.php");
