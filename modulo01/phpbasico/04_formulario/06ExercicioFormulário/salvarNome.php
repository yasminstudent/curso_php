<?php
session_start();
$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);

if (empty($nome) == false) {
    $_SESSION["nome"] = $nome;

    header("Location: index.php");
    exit;
} else {
    $_SESSION["erro"] = "Preencha o nome!";

    header("Location: login.php");
    exit;
}

?>