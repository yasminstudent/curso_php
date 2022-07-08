<?php
session_start();

if (isset($_SESSION["nome"])) {
    $nome = $_SESSION["nome"];
    echo "Olá, ".$nome." - <a href='deletarNome.php'>Sair</a>";
} else {
    header("Location: login.php");
    exit;
}

?>