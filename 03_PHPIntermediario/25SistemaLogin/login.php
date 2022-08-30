<?php
session_start();

if (isset($_POST["email"])) {
    $dsn = "mysql:dbname=blog;host=localhost";
    $dbuser = "root";
    $dbpass = "bcd127";

    try {
        $pdo = new PDO($dsn, $dbuser, $dbpass);

        $email = addslashes($_POST["email"]);
        $senha = md5($_POST["senha"]);

        $query = "SELECT id FROM usuarios WHERE email = :email and senha = :senha";
        $select = $pdo->prepare($query);
        $select->bindValue(":email", $email);
        $select->bindValue(":senha", $senha);
        $select->execute();
        if ($select->rowCount() > 0){
            $usuario = $select->fetch();
            $_SESSION["id"] = $usuario["id"];
            header("location: index.php");
        }

        echo "Email e/ou senha incorretos!";
    } catch (PDOException $e) {
        echo "Falha na conexão: ".$e->getMessage();
    }
}

?>

<h2>Página de login</h2>
<form method="POST">
    Email:<br>
    <input type="email" name="email"><br><br>

    Senha:<br>
    <input type="password" name="senha"><br><br>

    <input type="submit" name="botao" value="Entrar">
</form>
