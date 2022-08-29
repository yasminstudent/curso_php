<?php
if (isset($_POST["nome"])) {
    require_once("config.php");

    $nome = addslashes($_POST["nome"]);
    $email = addslashes($_POST["email"]);
    $senha = md5($_POST["senha"]);

    $query = "INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha";
    $insert = $pdo->prepare($query);
    $insert->bindValue(":nome", $nome);
    $insert->bindValue(":email", $email);
    $insert->bindValue(":senha", $senha);
    $insert->execute();
}

header("Location: index.php");
