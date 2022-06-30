<?php

$nome = filter_input(INPUT_POST, 'nome');
$idade = filter_input(INPUT_POST, 'idade');

//echo "Olá"; //isso poderia gerar um problema p/ o comando header

if($nome){ //verifica se o nome foi enviado
    echo "Nome: ".$nome."<br>";
    echo "Idade: ".$idade."<br>";
}
else{
    header("Location: 34EnviandoDadosFormulario.php"); //para executar esse comando
    //nenhuma informação deverá ter sido enviada ao navegador até o momento, ex: echo
    exit; //faz a execução do código parar, evita que hackers continuem a execução
    // do código mesmo após o comando header
}

?>