<?php
session_start();
require "config.php";

//verifica se o usuário está logado
if (isset($_SESSION["banco"])) {
    $idConta = $_SESSION["banco"];

    $query = "SELECT * FROM contas WHERE id = :id";
    $select = $pdo->prepare($query);
    $select->bindValue(":id", $idConta);
    $select->execute();

    //verifica se o usuário não existe
    if ($select->rowCount() < 1) {
        header("Location: login.php");
        exit;
    }

    $dadosConta = $select->fetch();
} else {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Caixa Eletrônico</title>
    </head>
    <body>
        <h1>Banco YAS</h1>
        Titular: <?=$dadosConta["titular"]?> <br>
        Agência: <?=$dadosConta["agencia"]?> <br>
        Conta: <?=$dadosConta["conta"]?> <br>
        Saldo: <?=number_format($dadosConta["saldo"],2)?> <br>
        <a href="sair.php">Sair</a>
        <hr>

        <h3>Movimentação/Extrato</h3>

        <a href="add_transacao.php">Adicionar Transação</a>

        <table border="1" width="400">
            <tr>
                <th>Data</th>
                <th>Valor</th>
            </tr>

            <?php 
            $select = $pdo->prepare("SELECT * FROM historico WHERE id_conta = :id_conta");
            $select->bindValue(":id_conta", $idConta);
            $select->execute();

            if ($select->rowCount() > 0) {
                foreach($select->fetchAll() as $item) {
                    $color = $item["tipo"] ? "red" : "green";
            ?>
                    <tr>
                        <th><?php echo date("d/m/Y H:i", strtotime($item["data_operacao"])); ?></th>
                        <th>
                            <font color="<?=$color?>">
                                R$ <?=$item["valor"]?>
                            </font>
                        </th>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </body>
</html>
