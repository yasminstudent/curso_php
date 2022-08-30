<?php

$action = "adicionar.php";
$botao = "Cadastrar";
$nome = "";
$email = "";

if (isset($_GET["modo"]) && $_GET["modo"] == "editar") {
    if (!isset($_GET["id"])) {
        header("Location: index.php");
    }

    require_once("config.php");

    $id = addslashes($_GET["id"]);
    $query = "SELECT nome, email FROM usuarios WHERE id = :id";
    $select = $pdo->prepare($query);
    $select->bindValue(":id", $id);
    $select->execute();

    if ($select->rowCount() <= 0) {
        header("Location: index.php");
    }

    $usuario = $select->fetch();
    $nome = $usuario["nome"];
    $email = $usuario["email"];

    $action = "editar.php?id=".$_GET["id"];
    $botao = "Editar";
}
?>

<form method="POST" action="<?=$action?>">
    Nome:<br>
    <input type="text" name="nome" value="<?=$nome?>"><br><br>

    Email:<br>
    <input type="email" name="email" value="<?=$email?>"><br><br>

    <?php if ($botao == "Cadastrar") { ?>
    Senha:<br>
    <input type="password" name="senha"><br><br>
    <?php }?>

    <input type="submit" name="botao" value="<?=$botao?>">
</form>
