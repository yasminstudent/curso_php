<?php
//starta variavel de sessão
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

//conexão com o banco
try {
    $dsn = "mysql:dbname=projeto_convite;host=localhost";
    $pdo = new PDO($dsn, "root", "bcd127");
} catch (PDOException $e) {
    echo "Falha ao conectar: ".$e->getMessage();
}

//redireciona para o login
function redirectToLogin() {
    header("Location: login.php");
    exit;
}

//redireciona para a página index
function redirectToIndex() {
    header("Location: index.php");
    exit;
}
