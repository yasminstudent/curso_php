<?php
require_once("config.php");

//verifica se o usuário já está logado
if (isset($_SESSION["login"])) {
    redirectToIndex();
}

$email = null;

//tenta realizar o login
if (isset($_POST["email"])) {
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $query = "SELECT id FROM users WHERE email = :email AND password = :user_password";
    
    $select = $pdo->prepare($query);
    $select->bindValue(":email", $email);
    $select->bindValue(":user_password", $password);
    $select->execute();
    if ($select->rowCount() > 0) {
        $user = $select->fetch();
        $_SESSION["login"] = $user["id"];
        redirectToIndex();
    } else {
?>
    <p style="color: red">Usuário ou senha inválidos!</p>
<?php
    }
}
?>

<fieldset>
    <h1>Login</h1>
    <form method="post">
        <input type="email" name="email" placeholder="digite seu email" required value="<?=$email?>"> <br><br>
        <input type="password" name="password" placeholder="digite sua senha" required> <br><br>
        <input type="submit" value="Entrar">
    </form>
</fieldset>
