<?php

try {
    $pdo = new PDO("mysql:dbname=blog;host=localhost", "root", "bcd127");
    //indica ao PDO que ele deve exibir quaisquer erros
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "FALHA: ".$e->getMessage();
}

$query = "SELECT * FROM postss";
/*
    como o nome da tabela está errado
    o comando query não terminou de executar
    portanto em seu retorno, não terá o método rowCount
    gerando um erro dizendo que rowCount não existe
    (em algumas versões do php)
*/
$select = $pdo->query($query);

echo "TOTAL: ".$select->rowCount();
