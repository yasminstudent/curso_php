<?php
/*
    Uma sessão serve para compartilhar informações entre páginas.
    A grosso modo a sessão fica salva no servidor, e quando o usuário acessa
    o navegador, ele identifica qual sessão pertence a este usuário.

    É usado por exemplo:
        para guardar qual usuário está logado;
        para enviar alguma mensagem ao frontend (alguma aviso de erro, por exemplo)
        e etc
*/

//quando uma página vai trabalhar com sessões, é preciso rodar esse comando antes:
session_start(); 

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS); 
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);

if($nome){
    echo "Nome: ".$nome."<br>";
    echo "Email: ".$email."<br>";
    echo "Idade: ".$idade."<br>";
}
else{
    //estamos adicionando dados na sessão aqui
    $_SESSION['aviso'] = "Preencha os dados corretamente!";
    //obs: _SESSION é um array

    header("Location: formulario.php");
    exit;
}

?>