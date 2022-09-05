<h1>Página 1</h1>

<form method="POST">
    Digite "yasmin" para passar:
    <br><br>

    <input type="text" name="codigo">
    <br><br>

    <input type="submit" value="Enviar">
</form>

<?php

if (isset($_POST["codigo"])) {
    $codigo = $_POST["codigo"];

    if ($codigo == "yasmin") {
        header("Location: pagina2.php");
        /*
        em certas versões do php, a linha 19 geraria um erro
        pois não se deve modificar o cabeçalho / página
        após já ter enviado alguma informação para o usuário
        (nesse caso, a informação seria o html, mas poderia ser um echo, print_r etc)
        portanto essse código teria que estar antes do html

        se tivesse um erro de php antes da linha 19, o redirecionamento também 
        não funcionaria
        */
    } else {
        echo "Acesso negado!!!";
    }
}

?>