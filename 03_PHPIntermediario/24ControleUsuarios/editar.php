<?php
if (isset($_GET["id"]) && isset($_POST["nome"])) {
    require_once("config.php");

    $id = addslashes($_GET["id"]);
    $nome = addslashes($_POST["nome"]);
    $email = addslashes($_POST["email"]);

    $query = "UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id";
    $update = $pdo->prepare($query);
    $update->bindValue(":nome", $nome);
    $update->bindValue(":email", $email);
    $update->bindValue(":id", $id);
    $update->execute();
}

header("Location: index.php");
