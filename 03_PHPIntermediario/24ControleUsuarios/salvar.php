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
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
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
    </body>
</html>
