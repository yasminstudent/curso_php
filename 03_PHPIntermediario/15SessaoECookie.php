<?php

/*
    Outras explicações em:
    02_PHPBasico/04_formulario/05Cookies.php
    02_PHPBasico/04_formulario/04Sessoes/recebedor.php

    Uma sessão é um campo reservado para você e o servidor
    e enquanto seu navegador estiver aberto a sessão vai durar (exceto quando tem um tempo determinado p/ expirar)

    geralmente usa-se para guardar o usuário logado
    e a sessão fica salva no servidor do site/sistema
    (e não conseguimos criar uma sessão com o javascript, apenas linguagens server-sid conseguem)

    já o cookie fica salvo no computador do usuário
    (e conseguimos criar com o javascript também)
*/

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start(); //não pode ter nenhuma exibição (echo, print_r) antes desse comando
}

if (!isset($_SESSION["user"])) {
    // criando variáveis de sessão
    $_SESSION["user"] = [
        "name" => "Wala",
        "occupation" => "Estudante de Programação"
    ];
    echo "Sessão criada com sucesso!";
} else {
    // exibindo variáveis de sessão
    echo "Bem vindo (a) ".$_SESSION["user"]["name"];
    echo "<br> Você é um (a) ótimo (a) ".$_SESSION["user"]["occupation"];

    // excluindo variáveis de sessão
    unset($_SESSION['user']);
}

//obs: a $_SESSION é um array universal, por assim dizer 

if (!isset($_COOKIE['idade'])) {
    $QuandoOCookieExpira = time() + 3600; //duração de 1h, o tempo é em segundos
    $idade = 20;

    // criando um cookie
    setcookie('idade', $idade, $QuandoOCookieExpira);
    echo "<br> Cookie criado com sucesso!";
} else {
    // exibindo um cookie
    echo "<br> Você tem ". $_COOKIE['idade'] . " anos";

    // excluindo um cookie
    $timeNegativo = time() - 3600; //Expira a 1 hora atrás
    setcookie('idade', "não importa pq eu vou ser excluído", $timeNegativo);
}
