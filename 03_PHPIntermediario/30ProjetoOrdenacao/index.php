<?php
try {
    $dsn = "mysql:dbname=projeto_ordenar;host=localhost";
    $dbuser = "root";
    $dbpass = "bcd127";

    $pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
    echo "Erro ao conectar com o banco: ".$e->getMessage();
}
?>
<!-- Opção de ordenação -->
<form method="get">
    <select name="orderby" onchange="this.form.submit()">
        <option value=""></option>
        <option value="id">Ordenar por id</option>
        <option value="nome">Ordenar por nome</option>
        <option value="idade">Ordenar por idade</option>
    </select>
</form>

<!-- Tabela com os usuários -->
<table border="1" width="400">
    <tr>
        <td>Nome</td>
        <td>Idade</td>
    </tr>

    <?php
    $orderby = "";
    if (isset($_GET["orderby"])) {
        $orderby = " order by ".$_GET["orderby"];
    }

    $select = "SELECT * FROM usuarios".$orderby;
    $select = $pdo->query($select);
    
    if ($select->rowCount() > 0) {
        $users = $select->fetchAll();
        foreach ($users as $user) {
    ?>
        <tr>
            <td><?=$user["nome"]?></td>
            <td><?=$user["idade"]?></td>
        </tr>
    <?php
        }
    }
    ?>
</table>
