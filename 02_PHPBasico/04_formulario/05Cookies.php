<?php
/*
    Um cookie é um "pedaço" de informação associado a um site e que 
    fica salvo no navegador do usuário.
*/

//Um cookie deve ser setado antes de qualquer exibição na tela (echo, print_r etc)

$QuandoOCookieExpira = time() + (86400 * 30); //duração de 30 dias, o tempo é em segundos
$valorDoCookie = "mestre do PHP";

//----- CRIANDO UM COOKIE -----
setcookie('nomeDoCookie', $valorDoCookie, $QuandoOCookieExpira);

if(isset($_COOKIE['nomeDoCookie'])){

    //----- EDITANDO UM COOKIE -----
    setcookie('nomeDoCookie', "superhumana / gênia", $QuandoOCookieExpira);
    //comentar exclusão do cookie p/ verificar essa etapa

    //----- EXIBINDO UM COOKIE -----
    $cookie = $_COOKIE['nomeDoCookie'];
    echo "<h1>Olá, ".$cookie."</h1>";

    //----- DELETANDO UM COOKIE -----
    $timeNegativo = time() - 3600; //Expira a 1 hora atrás
    setcookie('nomeDoCookie', "não importa pq eu vou ser excluído", $timeNegativo);
    //comentar criação do cookie p/ verificar essa etapa
}



?>