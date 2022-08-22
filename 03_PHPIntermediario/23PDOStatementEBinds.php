<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "bcd127";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $nome = 'Pedro';
    $id = 2;

    $update = "UPDATE usuarios SET nome = :novonome WHERE id = :id";
    $update = $pdo->prepare($update);
    $update->bindValue(':novonome', $nome);
    $update->bindValue(':id', $id);
    $update->execute();

    echo "Usuário atualizado com sucesso!";
} catch (PDOException $e) {
    echo "Falhou: ".$e->getMessage();
}