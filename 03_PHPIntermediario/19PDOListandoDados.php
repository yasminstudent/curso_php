<?php

$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpass = "bcd127";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    
    $select = "SELECT * FROM usuarios";
    $select = $pdo->query($select);

    if ($select->rowCount() > 0) {
        foreach($select->fetchAll() as $usuario) {
            echo "Nome: ".$usuario["nome"]." - " .$usuario["email"]."<br>";
        }
    } else {
        echo "Não há usuários cadastrados!";
    }

} catch (PDOException $e) {
    echo "Falhou: ".$e->getMessage();
}
