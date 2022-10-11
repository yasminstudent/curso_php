<?php
require_once("config.php");

//verifica se o usuário não está logado
if (!isset($_SESSION["login"])) {
    redirectToLogin();
}

$email = null;
$link = null;

//obtém dados do usuário logado
$query = "SELECT email, code FROM users WHERE id = :id";
$select = $pdo->prepare($query);
$select->bindValue(":id", $_SESSION["login"]);
$select->execute();

if ($select->rowCount() > 0) {
    $user = $select->fetch();
    $email = $user["email"];
    $link = "http://curso.php/03_PHPIntermediario/32ProjetoRegistroConvite/register.php?code=";
    $link .= urlencode($user["code"]);
}
?>

<!-- Exibe as informações do usuário -->
<h1>Área interna do sistema</h1>
<p>Usuário: <?=$email?> - <a href="goOut.php">Sair</a></p>
<p>Link: <?=$link?></p>
