<?php
session_start();
require "config.php";

if (isset($_POST["agencia"])) {
    $agencia = addslashes($_POST["agencia"]);
    $conta = addslashes($_POST["conta"]);
    $senha = md5($_POST["senha"]);

    $query = "SELECT * FROM contas WHERE agencia = :agencia AND conta = :conta
                AND senha = :senha";
    $select = $pdo->prepare($query);
    $select->bindValue(":agencia", $agencia);
    $select->bindValue(":conta", $conta);
    $select->bindValue(":senha", $senha);
    $select->execute();

    if ($select->rowCount() > 0) {
        $conta = $select->fetch();

        $_SESSION["banco"] = $conta["id"];
        header("Location: index.php");
        exit;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <form method="POST">
            Agência: <br>
            <input type="text" name="agencia" required><br><br>

            Conta: <br>
            <input type="text" name="conta" required><br><br>

            Senha: <br>
            <input type="password" name="senha" required><br><br>

            <input type="submit" value="entrar">
        </form>
    </body>
</html>
