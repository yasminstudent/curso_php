<?php

$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpass = "bcd127";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    echo "Conectou com sucesso";
} catch(PDOException $e) {
    echo "Falhou: ".$e->getMessage();
}
