<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "bcd127";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $update = "UPDATE usuarios SET email='abc@gmail.com' WHERE id = 1";
    $pdo->query($update);

    echo "Usuário atualizado com sucesso";
} catch (PDOException $e) {
    echo "Falhou: ".$e->getMessage();
}