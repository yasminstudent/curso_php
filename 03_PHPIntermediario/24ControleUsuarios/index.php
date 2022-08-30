<?php
require_once("config.php");
?>

<a href="salvar.php?modo=adicionar">Adicionar Novo Usuário</a>
<table border="1" width="600">
    <tr>
        <th width="200">Nome</th>
        <th width="200">E-mail</th>
        <th width="200">Ações</th>
    </tr>
    <?php
        $select = "SELECT * FROM usuarios";
        $select = $pdo->query($select);
        if ($select->rowCount() > 0) {
            foreach ($select->fetchAll() as $usuario) {
    ?>
                <tr>
                    <td><?=$usuario["nome"]?></td>
                    <td><?=$usuario["email"]?></td>
                    <td>
                        <a href="salvar.php?modo=editar&id=<?=$usuario["id"]?>">
                            Editar
                        </a> -
                        <a href="excluir.php?id=<?=$usuario["id"]?>">
                            Excluir
                        </a>
                    </td>
                </tr>
    <?php
            }
        }
    ?>
</table>
