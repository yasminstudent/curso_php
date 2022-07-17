<?php
/*
Descrição do Problema :( 
    Ao fazer o submit desse formulário e apertar em recarregar a página
    os dados são enviados novamente

Descrição da Solução :)
    Após fazer o processamento dos dados enviados fazer um redirecionamento
    com o próprio php para a mesma página, desse modo a página será recarregada 
    automaticamente e caso o usuário clique em recarregar, os dados não serão
    enviados novamente
*/

if (isset($_POST["exemplo"])) {
    $exemplo = $_POST["exemplo"] . "\n";
    file_put_contents("37ArquivoTeste.txt", $exemplo, FILE_APPEND);

    header("Location: 37ProjetoAntiF5.php");
}

?>

<form action="" method="POST">
    <input type="text" name="exemplo">
    <input type="submit" value="enviar">
</form>