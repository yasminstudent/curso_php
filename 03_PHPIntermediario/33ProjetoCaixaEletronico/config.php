<?php

try {
    $pdo = new PDO("mysql:dbname=projeto_caixaeletronico;host=localhost", "root", "bcd127");
} catch (PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}
