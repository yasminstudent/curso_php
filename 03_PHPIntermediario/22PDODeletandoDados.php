<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "bcd127";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $delete = "DELETE FROM usuarios WHERE id=6";
    $pdo->query($delete);

    echo "Usuário deletado com sucesso";
} catch (PDOException $e) {
    echo "Falhou: ".$e->getMessage();
}