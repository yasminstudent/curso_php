<?php
require_once("config.php");

//verifica se o código existe
if (!isset($_GET["code"])) {
    redirectToLogin();
}

//verifica se o código é válido
$query = "SELECT id FROM users WHERE code = :code";
$select = $pdo->prepare($query);
$select->bindValue(":code", $_GET["code"]);
$select->execute();
if ($select->rowCount() < 1) {
    redirectToLogin();
}

//efetua o cadastro
if (isset($_POST["email"])) {
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $code = md5(time().rand(0, 999));

    $query = "INSERT INTO users (email, password, code) VALUES (:email, :user_password, :code);";
    $select = $pdo->prepare($query);

    $select->bindValue(":email", $email);
    $select->bindValue(":user_password", $password);
    $select->bindValue(":code", $code);
    $select->execute();

    $_SESSION["login"] = $pdo->lastInsertId();
    redirectToIndex();
}

?>

<fieldset>
    <h1>Cadastro</h1>
    <form method="post">
        <input type="email" name="email" placeholder="digite seu email" required> <br><br>
        <input type="password" name="password" placeholder="digite sua senha" required> <br><br>
        <input type="submit" value="Cadastrar">
    </form>
</fieldset>
