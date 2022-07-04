<?php
//quando uma página vai trabalhar com sessões, é preciso rodar esse comando antes:
session_start(); 

if(isset($_SESSION['aviso'])){
    echo $_SESSION['aviso'];
    unset($_SESSION['aviso']); //remove essa variável de sessão
}

?>
<form action="36SessoesBack.php" method="POST">
    <label>
        Nome: <br>
        <input type="text" name="nome">
    </label>
    <br><br>

    <label>
        Email: <br>
        <input type="text" name="email">
    </label>
    <br><br>

    <label>
        Idade: <br>
        <input type="text" name="idade">
    </label>
    <br><br>

    <input type="submit" value="Enviar">
</form>