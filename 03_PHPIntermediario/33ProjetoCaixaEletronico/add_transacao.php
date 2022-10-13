<?php
session_start();
require "config.php";

//verifica se o usuário não está logado
if (!isset($_SESSION["banco"])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST["tipo"])) {
    $tipo = $_POST["tipo"];
    $valor = floatval(str_replace(",", ".", $_POST["valor"])); //padrão americano e do tipo float
    $id_conta = $_SESSION["banco"];

    $query = "INSERT INTO historico (id_conta, tipo, valor, data_operacao) 
        VALUES (:id_conta, :tipo, :valor, NOW())";
    $insert = $pdo->prepare($query);
    $insert->bindValue(":id_conta", $id_conta);
    $insert->bindValue(":tipo", $tipo);
    $insert->bindValue(":valor", $valor);
    $insert->execute();

    if ($tipo == "0") {
        // Depósito
        $query = "UPDATE contas SET saldo = saldo + :valor WHERE id = :id";
    } else {
        // Saque
        $query = "UPDATE contas SET saldo = saldo - :valor WHERE id = :id";
    }

    $update = $pdo->prepare($query);
    $update->bindValue(":valor", $valor);
    $update->bindValue(":id", $id_conta);
    $update->execute();

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Transação</title>
    </head>
    <body>
        <form method="post">
            Tipo de Transação: <br>
            <select name="tipo">
                <option value="0">Depósito</option>
                <option value="1">Retirada</option>
            </select><br><br>

            Valor: <br>
            <input type="text" pattern="[0-9.,]{1,}" name="valor"><br><br>

            <input type="submit" value="Adicionar">
        </form>
    </body>
</html>