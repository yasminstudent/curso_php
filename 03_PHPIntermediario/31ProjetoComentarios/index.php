<?php
try {
    $dsn = "mysql:dbname=projeto_comentarios;host=localhost";
    $pdo = new PDO($dsn, "root", "bcd127");

    //Cadastra uma mensagem
    if (isset($_POST["nome"])) {
        $nome = $_POST["nome"];
        $mensagem = $_POST["mensagem"];

        $query = "INSERT INTO mensagens (nome, mensagem, data) 
                    VALUES (:nome, :mensagem, NOW())";
        $insert = $pdo->prepare($query);
        $insert->bindValue(":nome", $nome);
        $insert->bindValue(":mensagem", $mensagem);
        $insert->execute();

        header("Location: index.php");
    }

} catch (PDOException $e) {
    echo "Falha ao conectar: ".$e->getMessage();
}

?>

<fieldset>
    <form method="POST">
        Nome: <br>
        <input type="text" name="nome" required><br><br>

        Mensagem: <br>
        <textarea name="mensagem" required cols="30" rows="10"></textarea><br><br>

        <input type="submit" value="Enviar Mensagem">
    </form>
</fieldset>

<br><br>
<?php
if (isset($pdo)) {
    $query = "SELECT * FROM mensagens ORDER BY data DESC";
    $select = $pdo->query($query);

    if ($select->rowCount() > 0) {
        $messages = $select->fetchAll();

        foreach ($messages as $message) {
            $date = date("d/m/Y H:i:s", strtotime($message["data"]));
?>
        <strong><small><?=$date?></small></strong><br>
        <strong><?=$message["nome"]?></strong><br>
        <?=$message["mensagem"]?>
        <hr>
<?php
        }
    } else {
        echo "Não Há Mensagens Cadastradas!";
    }
}
?>

