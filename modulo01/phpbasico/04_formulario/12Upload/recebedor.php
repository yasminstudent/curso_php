<?php

/*
echo '<pre>';
print_r($_FILES);

$_FILES é um array que guarda informações de arquivos enviados, tais como:
    nome, tipo, tamanho, armazenamento temporário do arquivo 
    e se houve algum erro no envio do arquivo
*/

session_start();


//Validando o tipo do arquivo (aceitando apenas imagens)
$tiposAceitos = [
    "image/jpeg",
    "image/jpg",
    "image/png"
];

if (in_array($_FILES["arquivo"]["type"], $tiposAceitos)) {
    
    //exemplo de solução para gerar nomes únicos:
    $nomeNovo = md5(time().rand(0, 1000)) . ".jpg";

    //faz o upload do arquivo
    move_uploaded_file($_FILES["arquivo"]["tmp_name"], "arquivos/perfil.jpg");
    //move_uploaded_file($_FILES["arquivo"]["tmp_name"], "arquivos/".$nomeNovo);

    $_SESSION["mensagem"] = "Arquivo salvo com sucesso";
} else {
    $_SESSION["mensagem"] = "Tipo de arquivo não permitido!";
}

header("Location: index.php");

?>