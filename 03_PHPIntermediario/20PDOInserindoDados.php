<?php

$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpass = "bcd127";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $nome = "Yasmin";
    $email = "yasmin@gmail.com";
    $senha = md5("yasmin123");

    $insert = "INSERT INTO usuarios SET nome='$nome', email='$email', senha='$senha'";
    $insert = $pdo->query($insert);

    echo "Usuário inserido:".$pdo->lastInsertId();
} catch (PDOException $e) {
    echo "Falhou: ".$e->getMessage();
}