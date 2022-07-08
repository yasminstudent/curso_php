<?php

/*
    função isset -> is set
        -> retorna true se a variável estiver setada e false se não estiver
    
    função empty
        -> retorna true se a variável estiver vazia e false se não estiver
*/

//Validando se os dados foram enviados e se não estão vazios
if (isset($_POST["email"]) && empty($_POST["email"]) == false) {
    if (isset($_POST["senha"]) && empty($_POST["senha"]) == false) {

        //recuperando os dados enviados
        $email = $_POST["email"];
        $senha = $_POST["senha"];
    
        echo "Meu email eh: ".$email . "<br>";
        echo "Minha senha eh: ".$senha;
    }
}

?>

<form method="POST">
    E-mail: <br/>
    <input type="email" name="email"> <br/><br/>

    Senha: <br/>
    <input type="password" name="senha"> <br/><br/>

    <input type="submit" name="enviar" value="Enviar Dados">
</form>